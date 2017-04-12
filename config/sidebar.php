<?php 
	
return[

	'menu' => [
   		[
            'type' => 'simple',
            'text' => 'Categories',
            'url'  => 'categories.index',
            'ico'  => 'fa fa-image'
        ],

        [
            'type' => 'simple',
            'text' => 'Galleries',
            'url'  => 'galleries.index',
            'ico'  => 'fa fa-image'
        ],

        [
            'type' => 'simple',
            'text' => 'News',
            'url'  => 'news.index',
            'ico'  => 'fa fa-newspaper-o'
        ],

        [
            'type' => 'simple',
            'text' => 'Contact',
            'url'  => 'contact.index',
            'ico'  => 'fa fa-envelope'
        ],

        [
         'type' => 'tree',
         'text' => 'Productos',
         'ico'  => 'fa fa-shopping-basket',
         'childs' => [

                [
                  'text' => 'Categories',
                  'url' => 'categories.index',
                  'ico' => 'fa fa-groups'
                ],

                [
                  'text' => 'Subcategories',
                  'url' => 'categories.index',
                  'ico' => 'fa fa-home'
                ],

                [
                  'text' => 'Products',
                  'url' => 'categories.index',
                  'ico' => 'fa fa-envelope'
                ],
            ]
        ],
	]
]
?>