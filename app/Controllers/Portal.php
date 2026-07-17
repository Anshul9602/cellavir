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
