<?php

namespace App\Controllers;

class Portal extends BaseController
{
    private function render(string $view, array $data = []): string
    {
        return view('layout/header', $data)
            . view('portal/' . $view, $data)
            . view('layout/footer', $data);
    }

    public function index()
    {
        return $this->render('home', [
            'pageTitle' => 'CellaVie — Built on Science. Designed for Longevity.',
            'activeNav' => 'home',
            'bodyClass' => 'protocol-home-page',
        ]);
    }

    public function about()
    {
        return $this->render('about', [
            'pageTitle' => 'About Us — CellaVie',
            'activeNav' => 'about',
            'bodyClass' => 'protocol-about-page',
        ]);
    }

    public function science()
    {
        return $this->render('science', [
            'pageTitle' => 'Science — CellaVie',
            'activeNav' => 'science',
            'bodyClass' => 'protocol-science-page',
        ]);
    }

    public function faq()
    {
        return $this->render('faq', [
            'pageTitle' => 'FAQs — CellaVie',
            'activeNav' => 'faq',
            'loadFaqJs' => true,
            'bodyClass' => 'protocol-faq-page',
        ]);
    }

    public function contact()
    {
        return $this->render('contact', [
            'pageTitle' => 'Contact — CellaVie',
            'activeNav' => 'contact',
            'loadContactJs' => true,
            'bodyClass' => 'protocol-contact-page',
        ]);
    }

    public function contactSubmit()
    {
        $name         = trim((string) $this->request->getPost('name'));
        $email        = trim((string) $this->request->getPost('email'));
        $organization = trim((string) $this->request->getPost('organization'));
        $subject      = trim((string) $this->request->getPost('subject'));
        $message      = trim((string) $this->request->getPost('message'));

        $rules = [
            'name'    => 'required|min_length[2]|max_length[120]',
            'email'   => 'required|valid_email|max_length[190]',
            'subject' => 'permit_empty|max_length[190]',
            'message' => 'required|max_length[5000]',
        ];

        $messages = [
            'name' => [
                'required'   => 'Please enter your full name.',
                'min_length' => 'Your name must be at least 2 characters.',
            ],
            'email' => [
                'required'    => 'Please enter your email address.',
                'valid_email' => 'Please enter a valid email address.',
            ],
            'message' => [
                'required' => 'Please enter your message.',
            ],
        ];

        if (! $this->validate($rules, $messages)) {
            $errors  = $this->validator->getErrors();
            $errorMsg = $errors['message'] ?? $errors['email'] ?? $errors['name'] ?? reset($errors) ?: 'Please fill in all required fields correctly.';

            return redirect()->to(site_url('contact') . '#contact-form')
                ->withInput()
                ->with('contact_error', $errorMsg);
        }

        $wordCount = str_word_count($message);
        if ($wordCount < 25) {
            $wordLabel = $wordCount === 1 ? 'word' : 'words';

            return redirect()->to(site_url('contact') . '#contact-form')
                ->withInput()
                ->with('contact_error', "Your message must be at least 25 words. You entered {$wordCount} {$wordLabel}.");
        }

        if ($subject === '') {
            $subject = 'Book a Consultancy';
        }

        $brand      = cv_brand();
        $storeEmail = (string) (env('email.recipients') ?: ($brand['contact_email'] ?? 'cellaviesupport@gmail.com'));
        $fromEmail  = (string) (env('email.fromEmail') ?: $storeEmail);
        $fromName   = (string) (env('email.fromName') ?: ($brand['short_name'] ?? 'CellaVie'));

        $safeName    = esc($name);
        $safeEmail   = esc($email);
        $safeOrg     = esc($organization !== '' ? $organization : '—');
        $safeSubject = esc($subject);
        $safeMessage = nl2br(esc($message));

        $storeBody = <<<HTML
            <h2>New consultancy enquiry</h2>
            <p><strong>Name:</strong> {$safeName}</p>
            <p><strong>Email:</strong> {$safeEmail}</p>
            <p><strong>Organization:</strong> {$safeOrg}</p>
            <p><strong>Subject:</strong> {$safeSubject}</p>
            <p><strong>Message:</strong></p>
            <p>{$safeMessage}</p>
        HTML;

        $customerBody = <<<HTML
            <p>Hi {$safeName},</p>
            <p>Thank you for contacting {$fromName}. We received your consultancy request and our team will respond within 1–2 business days.</p>
            <p><strong>Subject:</strong> {$safeSubject}</p>
            <p><strong>Your message:</strong></p>
            <p>{$safeMessage}</p>
            <p>— {$fromName}</p>
        HTML;

        $emailService = \Config\Services::email();

        // Store notification
        $emailService->clear();
        $emailService->setFrom($fromEmail, $fromName);
        $emailService->setTo($storeEmail);
        $emailService->setReplyTo($email, $name);
        $emailService->setSubject('Consultancy enquiry: ' . $subject);
        $emailService->setMessage($storeBody);
        $storeSent = $emailService->send(false);

        // Customer confirmation
        $emailService->clear();
        $emailService->setFrom($fromEmail, $fromName);
        $emailService->setTo($email);
        $emailService->setSubject('We received your consultancy request — ' . $fromName);
        $emailService->setMessage($customerBody);
        $customerSent = $emailService->send(false);

        if (! $storeSent || ! $customerSent) {
            log_message('error', 'Contact form mail failed. Store: {store} Customer: {customer} Debug: {debug}', [
                'store'    => $storeSent ? 'ok' : 'fail',
                'customer' => $customerSent ? 'ok' : 'fail',
                'debug'    => $emailService->printDebugger(['headers', 'subject', 'body']),
            ]);

            return redirect()->to(site_url('contact') . '#contact-form')
                ->withInput()
                ->with('contact_error', 'Sorry, we could not send your message right now. Please try again or email us directly.');
        }

        return redirect()->to(site_url('contact') . '#contact-form')
            ->with('contact_success', 'Thank you for your enquiry. Our team will respond within 1–2 business days. A confirmation email has been sent to you.');
    }

    public function newsletter()
    {
        $email = trim((string) $this->request->getPost('email'));

        if ($email === '' || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('newsletter_error', 'Please enter a valid email address.');
        }

        $brand      = cv_brand();
        $storeEmail = (string) (env('email.recipients') ?: ($brand['contact_email'] ?? 'cellaviesupport@gmail.com'));
        $fromEmail  = (string) (env('email.fromEmail') ?: $storeEmail);
        $fromName   = (string) (env('email.fromName') ?: ($brand['short_name'] ?? 'CellaVie'));
        $safeEmail  = esc($email);

        $storeBody = <<<HTML
            <h2>New newsletter subscription</h2>
            <p><strong>Email:</strong> {$safeEmail}</p>
            <p>This subscriber joined the CellaVie newsletter from the website footer.</p>
        HTML;

        $subscriberBody = <<<HTML
            <p>Hi,</p>
            <p>Thank you for subscribing to the {$fromName} newsletter.</p>
            <p>You'll receive updates on science-backed peptide protocols, wellness insights, and CellaVie news.</p>
            <p>— {$fromName}</p>
        HTML;

        $emailService = \Config\Services::email();

        $emailService->clear();
        $emailService->setFrom($fromEmail, $fromName);
        $emailService->setTo($storeEmail);
        $emailService->setReplyTo($email);
        $emailService->setSubject('New newsletter subscription — ' . $fromName);
        $emailService->setMessage($storeBody);
        $storeSent = $emailService->send(false);

        $emailService->clear();
        $emailService->setFrom($fromEmail, $fromName);
        $emailService->setTo($email);
        $emailService->setSubject('You are subscribed — ' . $fromName);
        $emailService->setMessage($subscriberBody);
        $subscriberSent = $emailService->send(false);

        if (! $storeSent || ! $subscriberSent) {
            log_message('error', 'Newsletter mail failed. Store: {store} Subscriber: {subscriber} Debug: {debug}', [
                'store'      => $storeSent ? 'ok' : 'fail',
                'subscriber' => $subscriberSent ? 'ok' : 'fail',
                'debug'      => $emailService->printDebugger(['headers', 'subject', 'body']),
            ]);

            return redirect()->back()->with('newsletter_error', 'Sorry, we could not complete your subscription right now. Please try again.');
        }

        return redirect()->back()->with('newsletter_success', 'Thank you for subscribing. A confirmation email has been sent to you.');
    }

    public function shop(?string $category = null)
    {
        return $this->render('shop', [
            'pageTitle' => 'Protocols — CellaVie',
            'activeNav' => 'shop',
            'category' => $category,
        ]);
    }

    public function privacy()
    {
        return $this->render('privacy', ['pageTitle' => 'Privacy Policy — CellaVie']);
    }

    public function terms()
    {
        return $this->render('terms', ['pageTitle' => 'Terms of Service — CellaVie']);
    }

    public function shipping()
    {
        return $this->render('shipping', ['pageTitle' => 'Shipping Policy — CellaVie']);
    }
}
