<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footerSections = [
            [
                'title' => 'DC COMICS',
                'items' => [
                    ['label' => 'Characters', 'url' => '#'],
                    ['label' => 'Comics', 'url' => '#'],
                    ['label' => 'Movies', 'url' => '#'],
                    ['label' => 'TV', 'url' => '#'],
                    ['label' => 'Games', 'url' => '#'],
                    ['label' => 'Videos', 'url' => '#'],
                    ['label' => 'News', 'url' => '#'],
                ]
            ],
            [
                'title' => 'SHOP',
                'items' => [
                    ['label' => 'Shop DC', 'url' => '#'],
                    ['label' => 'Shop DC Collectibles', 'url' => '#'],
                ]
            ],
            [
                'title' => 'DC',
                'items' => [
                    ['label' => 'Terms Of Use', 'url' => '#'],
                    ['label' => 'Privacy policy (New)', 'url' => '#'],
                    ['label' => 'Ad Choices', 'url' => '#'],
                    ['label' => 'Advertising', 'url' => '#'],
                    ['label' => 'Jobs', 'url' => '#'],
                    ['label' => 'Subscriptions', 'url' => '#'],
                    ['label' => 'Talent Workshops', 'url' => '#'],
                    ['label' => 'CPSC Certificates', 'url' => '#'],
                    ['label' => 'Ratings', 'url' => '#'],
                    ['label' => 'Shop Help', 'url' => '#'],
                    ['label' => 'Contact Us', 'url' => '#'],
                ]
            ],
            [
                'title' => 'SITES',
                'items' => [
                    ['label' => 'DC', 'url' => '#'],
                    ['label' => 'MAD Magazine', 'url' => '#'],
                    ['label' => 'DC Kids', 'url' => '#'],
                    ['label' => 'DC Universe', 'url' => '#'],
                    ['label' => 'DC Power Visa', 'url' => '#'],
                ]
            ]
        ];

        $socialIcons = [
            ['image' => 'footer-facebook.png', 'alt' => 'Facebook', 'url' => '#'],
            ['image' => 'footer-twitter.png', 'alt' => 'Twitter', 'url' => '#'],
            ['image' => 'footer-youtube.png', 'alt' => 'YouTube', 'url' => '#'],
            ['image' => 'footer-pinterest.png', 'alt' => 'Pinterest', 'url' => '#'],
            ['image' => 'footer-periscope.png', 'alt' => 'Periscope', 'url' => '#']
        ];

        return view('partials.footer', compact('footerSections', 'socialIcons'));
    }
}
