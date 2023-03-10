<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;
    public static function models(){
        $data=[

            //Navigation

            'webname' => 'ff VLOG POST',
            'home'=> 'Homehs',
            'about' => 'About',
            'contact' => 'Contact',
            'blog' => 'Blog',

            // Content
            'blogtitle' => 'Welcome to Blog Post!',
            'bio' => 'Posted on January 1, 2022 by Angelo A. Sayson',
            'webdes' => 'Web Design',
            'freebies' => 'Freebies',
            //side widgets
            'search' => 'Search',
            'enter' => 'Enter search term',
            'go' => 'Go!',



            //paragraphs
            'p1' => 'Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.',
            'p2' => 'The universe is large and old, and the ingredients for life as we know it are everywhere, so there\'s no reason to think that Earth would be unique in that regard. Whether of not the life became intelligent is a different question, and we\'ll see if we find that.',
            'p3' => 'If you get asteroids about a kilometer in size, those are large enough and carry enough energy into our system to disrupt transportation, communication, the food chains, and that can be a really bad day on Earth.',
            'p4' => 'I have odd cosmic thoughts every day',
            'p5' => 'For me, the most fascinating interface is Twitter. I have odd cosmic thoughts every day and I realized I could hold them to myself or share them with people who might be interested.',
            'p6' => 'Venus has a runaway greenhouse effect. I kind of want to know what happened there because we\'re twirling knobs here on Earth without knowing the consequences of it. Mars once had running water. It\'s bone dry today. Something bad happened there as well.',

            //comment section
            'commentername'=>'Commenter Name',

            'cc1'=>'If you\'re going to lead a space frontier, it has to be government; it\'ll never be private enterprise. Because the space frontier is dangerous, and it\'s expensive, and it has unquantified risks.',
            'cc2'=>'And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can\'t get investors.',
            'cc3'=>' When you put money directly to a problem, it makes a good headline.',
            'cc4'=>'When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.',

            //category widget
           'category' => 'Categories',
           'webdesign' => 'Web Design',
           'html' => 'HTML',
           'javascr' => 'JavaScript',
           'csss' => 'CSS',
           'tutorials' => 'Tutorials',

           //side widget
            'wiiidget' => 'Side Widget',
            'cardbody' => 'You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!',





            //Footer

            'footerdetail' => 'Copyright @Sayson Website 2023'


        ];
        return $data;
    }

}
