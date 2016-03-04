<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    private $categories = [
        'laracast' => 'Laracast',
        'lumen' => 'Lumen',
        'homestead' => 'Homestead',
        'tutorials' => 'Tutorials',
    ];

    private $posts = [
        1 =>[
            'id' => 1,
            'category' => 'laracast',
            'author' => 'Paulo Souza',
            'date' => '04/03/2016 as 15:38hs',
            'title' => 'Laravel From Scratch', 
            'post' => 'Each year, the Laracasts "Laravel From Scratch" series is refreshed to reflect the latest iteration of the framework. This is the 2016 edition, which uses version 5.2 of the framework.<br><br>Are you hoping to level up your toolset? You come to the right place. This series will take you from installing Laravel, all the way up to mastering the essentials of the framework.',
        ],
        2=>[
            'id' => 2,
            'category' => 'lumen',
            'author' => 'Wesley Willians',
            'date' => '03/03/2016 as 15:12',
            'title' => 'Benchmark Breaking Speed', 
            'post' => 'Lumen is the perfect solution for building Laravel based micro-services and blazing fast APIs. In fact, it is one of the fastest micro-frameworks available. It has never been easier to write stunningly fast services to support your Laravel applications.',
        ],
        3=>[
            'id' => 3,
            'category' => 'homestead',
            'author' => 'Paulo Souza',
            'date' => '02/03/2016 as 15:34',
            'title' => 'Introduction',
            'post' => 'Laravel strives to make the entire PHP development experience delightful, including your local development environment. Vagrant provides a simple, elegant way to manage and provision Virtual Machines.<br>br>
                Laravel Homestead is an official, pre-packaged Vagrant "box" that provides you a wonderful development environment without requiring you to install PHP, HHVM, a web server, and any other server software on your local machine. No more worrying about messing up your operating system! Vagrant boxes are completely disposable. If something goes wrong, you can destroy and re-create the box in minutes!',
        ],
        4=>[
            'id' => 4,
            'category' => 'tutorials',
            'author' => 'Wesley Willians',
            'date' => '01/03/2016 as 15:20',
            'title' => 'Database Migrations',
            'post' => 'So, let\'s build a database table that will hold all of our tasks. The Artisan CLI can be used to generate a variety of classes and will save you a lot of typing as you build your Laravel projects. In this case, let\'s use the make:migration command to generate a new database migration for our tasks table:<br><br><code>php artisan make:migration create_tasks_table --create=tasks</code>',
        ],
        5=>[
            'id' => 5,
            'category' => 'lumen',
            'author' => 'Paulo Souza',
            'date' => '29/02/2016 as 15:45',
            'title' => 'The Convenience You Love', 
            'post' => 'Don\'t sacrifice power for speed. Use the Laravel features you love like Eloquent, caching, queues, validation, routing, middleware, and the powerful Laravel service container. All with almost zero configuration.<br><br><code>$app->get("user/{id}", function($id) {<br>&nbsp;&nbsp;return User::findOrFail($id);<br>});</code>',
        ],
    ];

    public function index()
    {
        return view(
                    'index',
                    [
                        'categories' => $this->categories,
                        'posts' => $this->posts,
                    ]
                );
    }

    public function view($id)
    {
        if(isset($this->posts[$id])){
            return view(
                        'single',
                        [
                            'categories' => $this->categories,
                            'posts' => $this->posts,
                            'singlepost' => $this->posts[$id],
                        ]
                    );
        }
        return view(
                    '404',
                    [
                        'categories' => $this->categories,
                    ]
                );
    }

    public function category($category)
    {
        if(isset($this->categories[$category])){
            return view(
                        'categories',
                        [
                            'categories' => $this->categories,
                            'posts' => $this->posts,
                            'category' => $category,
                        ]
                    );
        }
        return view(
                    '404',
                    [
                        'categories' => $this->categories
                    ]
                );
    }
}
