@extends(backpack_view('blank'))

@php
    // static cards
    $widgets['before_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [ // widgets 
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-primary mb-2',
                'value'       => '11.456',
                'description' => 'Registered users.',
                'progress'    => 57, // integer
                'hint'        => '8544 more until next milestone.'
            ],
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-cyan mb-2',
                'value'       => '11.456',
                'description' => 'Registered users.',
                'progress'    => 57, // integer
                'hint'        => '8544 more until next milestone.'
            ],
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-purple mb-2',
                'value'       => '11.456',
                'description' => 'Registered users.',
                'progress'    => 57, // integer
                'hint'        => '8544 more until next milestone.'
            ],
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-teal mb-2',
                'value'       => '11.456',
                'description' => 'Registered users.',
                'progress'    => 57, // integer
                'hint'        => '8544 more until next milestone.'
            ],
        ]
    ];

    // information cards
    $widgets['before_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [ // widgets 
            [
                'type' => 'card',
                'wrapperClass' => 'col-sm-6 col-md-4', // optional
                'content' => [
                    'header' => 'Some card title1', // optional
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                ]
            ],
            [
                'type' => 'card',
                'wrapperClass' => 'col-sm-6 col-md-8', // optional
                'content' => [
                    'header' => 'Some card title2', // optional
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                ]
            ]
        ]
    ];

    /*
        // well cards
        $widgets['before_content'][] = [
            'type' => 'well',
            'wrapperClass' => 'col-sm-12',
            'content' => 'This text will be in a div with the class "<i>well</i>".',
        ];

        // Panel 
        $widgets['before_content'][] = [
            'type' => 'panel',
            'wrapperClass' => 'col-sm-12',
            'title' => 'test panel',
            'content' => 'This text will be in a div with the class "<i>panel</i>".',
        ];
    */
@endphp

@section('content')
@endsection