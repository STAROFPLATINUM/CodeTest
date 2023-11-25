<?php
session_start();





$books = array(
   //Comics
   array(
       'isbn' => '0785199617',
       'image' => './images/MILES.jpg',
       'author' => 'Rich Thomas (Adapter), Jeff Clark(Adapter)',
       'title' => 'The Amazing Spider-Man: An Origin Story',
       'price' => 46.95,
       'year' => 2011,
       'genre' => 'Comics',
   ),
   array(
       'isbn' => '0785199616',
       'image' => './images/ORIGIN.jpg',
       'author' => 'Brian Michael Bendis (Author), Sara Pichelli (Cover Art, Illustrator)',
       'title' => 'SPIDER-MAN: MILES MORALES VOL. 1',
       'price' => 20.99,
       'year' => 2016,
       'genre' => 'Comics',
   ),
   array(
       'isbn' => '0785194770',
       'image' => './images/2099.jpg',
       'author' => 'Steve Orlando (Author), Ken Lashley (Cover Art), Paul Fry (Illustrator), Marvel Various (Illustrator)',
       'title' => 'SPIDER-MAN 2099: EXODUS',
       'price' => 22.83,
       'year' => 2022,
       'genre' => 'Comics',
   ),
   array(
      'isbn' => '0785199618',
      'image' => './images/VENOM.jpg',
      'author' => 'Tom DeFalco (Author), Marvel Various (Author, Illustrator), Todd McFarlane (Cover Art), Ron Frenz (Illustrator)',
      'title' => 'SPIDER-MAN VS. VENOM OMNIBUS',
      'price' => 119.94,
      'year' => 2023,
      'genre' => 'Comics',
   ),
   array(
       'isbn' => '0785199619',
       'image' => './images/GWEN.jpg',
       'author' => 'Jason Latour (Author), Marvel Various (Author, Illustrator), Leinil Yu (Cover Art), Robbi Rodriguez (Illustrator)',
       'title' => 'SPIDER-GWEN: GHOST-SPIDER MODERN ERA EPIC',
       'price' => 56.25,
       'year' => 2023,
       'genre' => 'Comics',
    ),

   //Fantasy
   array(
      'isbn' => '0008471282',
      'image' => './images/LORD.jpg',
      'author' => 'J. R. R. Tolkien (Author)',
      'title' => 'The Lord of the Rings',
      'price' => 89.82,
      'year' => 2021,
      'genre' => 'Fantasy',
  ),
  array(
      'isbn' => '979-8749522310',
      'image' => './images/ALICE.jpg',
      'author' => 'Lewis Carroll (Author), Sir John Tenniel (Illustrator)',
      'title' => 'Alice in Wonderland: The Original 1865 Edition',
      'price' => 7.35,
      'year' => 2021,
      'genre' => 'Fantasy',
  ),
  array(
      'isbn' => '0008471283',
      'image' => './images/PRINCE.jpg',
      'author' => 'Antoine de Saint-Exupery (Author), Katherine Woods (Translator)',
      'title' => 'The Little Prince',
      'price' => 14.95,
      'year' => 2017,
      'genre' => 'Fantasy',
  ),
  array(
     'isbn' => '0345535529',
     'image' => './images/GOT.jpg',
     'author' => 'George R. R. Martin (Author)',
     'title' => 'A Game of Thrones 5-Book Boxed Set',
     'price' => 59.95,
     'year' => 2013,
     'genre' => 'Fantasy',
  ),
  array(
      'isbn' => '0061478784',
      'image' => './images/CASTLE.jpg',
      'author' => 'Diana Wynne Jones (Author)',
      'title' => 'Howls Moving Castle',
      'price' => 9.99,
      'year' => 2008,
      'genre' => 'Fantasy',
   ),

   //Sci-fi
   array(
      'isbn' => 'B00IQO403K',
      'image' => './images/TB1.jpg',
      'author' => 'Cixin Liu (Author), Ken Liu (Translator)',
      'title' => 'The Three-Body Problem',
      'price' => 23.82,
      'year' => 2016,
      'genre' => 'Sci-fi',
  ),
  array(
      'isbn' => 'B00R13OYU6',
      'image' => './images/TB2.jpg',
      'author' => 'Cixin Liu (Author), Joel Martinsen (Translator)',
      'title' => 'The Dark Forest (The Three-Body Problem Series Book 2)',
      'price' => 12.99,
      'year' => 2015,
      'genre' => 'Sci-fi',
  ),
  array(
      'isbn' => 'B00WDVKZY0',
      'image' => './images/TB3.jpg',
      'author' => 'Cixin Liu (Author), Ken Liu (Translator) ',
      'title' => 'Death End (The Three-Body Problem Series Book 3)',
      'price' => 12.99,
      'year' => 2016,
      'genre' => 'Sci-fi',
  ),
  array(
     'isbn' => 'B08QGMTFNW',
     'image' => './images/EARTH.jpg',
     'author' => 'Cixin Liu (Author) ',
     'title' => 'The Wandering Earth',
     'price' => 14.99,
     'year' => 2021,
     'genre' => 'Sci-fi',
  ),
  array(
      'isbn' => 'B06XRGCFS8',
      'image' => './images/LIGHTING.jpg',
      'author' => 'Cixin Liu (Author), Joel Martinsen (Translator)',
      'title' => 'Ball Lightning',
      'price' => 14.99,
      'year' => 2018,
      'genre' => 'Sci-fi',
   ),
);


?>