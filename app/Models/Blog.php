<?php 

namespace App\Models;
class Blog {
    public static function all(){
        return [
            [
                'id'=> 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '15 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Januari 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ]
        ];
    }
}