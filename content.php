<?php
$content = [
    [
        "username" => "george",
        "password" => "1234",
        "name" => "Γιώργος Παπαδάκης",
        "image" => "images/image1.jpg",
        "contacts" => [
            [
                "name" => "Μάνος Παπαδόπουλος",
                "image" => "images/image2.jpg"
            ],
            [
                "name" => "Μαρία Μαρκάκη",
                "image" => "images/image3.jpg"
            ],
            [
                "name" => "Κατερίνα Λουλουδάκη",
                "image" => "images/image5.jpg"
            ],
        ],
        "articles" => [
            [
                "id" => "article1",
                "postedBy" => [
                    "name" => "Μαρία Μαρκάκη",
                    "image" => "images/image3.jpg"
                ],
                "content" => '<p>To Ράδιο Αρβύλα της Πέμπτης</p><iframe src="https://www.youtube.com/embed/W26y7xrQ0bk" width="500" height="300"></iframe>'
            ],
            [
                "id" => "article2",
                "postedBy" => [
                    "name" => "Μάνος Παπαδόπουλος",
                    "image" => "images/image2.jpg"
                ],
                "content" => "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed mi scelerisque, rutrum lectus non, imperdiet sem.
                                In porttitor accumsan elit, nec aliquet risus. Suspendisse non leo vitae diam sagittis gravida non id est.
                                Nam maximus augue in euismod lacinia. Etiam eget augue eu enim dictum consequat.
                                Pellentesque consectetur tortor vitae nulla suscipit, eu molestie dui ornare.
                             </p>
                             <p>
                                Suspendisse bibendum non eros vitae efficitur. Mauris sit amet lacinia urna, at vestibulum enim.
                                Morbi rutrum porttitor ligula, vitae laoreet dui tincidunt tincidunt. Nulla maximus ut lacus et condimentum. 
                                Ut blandit mollis purus, in blandit ligula tincidunt eget. Donec semper orci eros, sit amet facilisis nibh auctor eget.
                                Aenean mauris quam, finibus quis dolor at, suscipit laoreet nunc. Cras at nunc molestie urna ultricies pellentesque quis sed neque.
                             </p>"
            ],
        ]
    ],
    [
        "username" => "maria",
        "password" => "test",
        "name" => "Μαρία Μαρκάκη",
        "image" => "images/image3.jpg",
        "contacts" => [
            [
                "name" => "Κατερίνα Λουλουδάκη",
                "image" => "images/image5.jpg"
            ],
            [
                "name" => "Γιάννης Παναγιωτάκης",
                "image" => "images/image2.jpg"
            ],
            [
                "name" => "Κώστας Νικηφοράκης",
                "image" => "images/image4.jpg"
            ]
        ],
        "articles" => [
            [
                "id" => "article2",
                "postedBy" => [
                    "name" => "Κώστας Νικηφοράκης",
                    "image" => "images/image4.jpg"
                ],
                "content" => "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed mi scelerisque, rutrum lectus non, imperdiet sem.
                                In porttitor accumsan elit, nec aliquet risus. Suspendisse non leo vitae diam sagittis gravida non id est.
                                Nam maximus augue in euismod lacinia. Etiam eget augue eu enim dictum consequat.
                                Pellentesque consectetur tortor vitae nulla suscipit, eu molestie dui ornare.
                             </p>
                             <p>
                                Suspendisse bibendum non eros vitae efficitur. Mauris sit amet lacinia urna, at vestibulum enim.
                                Morbi rutrum porttitor ligula, vitae laoreet dui tincidunt tincidunt. Nulla maximus ut lacus et condimentum. 
                                Ut blandit mollis purus, in blandit ligula tincidunt eget. Donec semper orci eros, sit amet facilisis nibh auctor eget.
                                Aenean mauris quam, finibus quis dolor at, suscipit laoreet nunc. Cras at nunc molestie urna ultricies pellentesque quis sed neque.
                             </p>"
            ],  
            [
                "id" => "article1",
                "postedBy" => [
                    "name" => "Κατερίνα Λουλουδάκη",
                    "image" => "images/image5.jpg"
                ],
                "content" => '<p>Διακοπές στη Χαβάη!</p><div><img src="images/hawaii.jpg" width="500" height="300"></div>'
            ]
        ]
    ]
];
?>