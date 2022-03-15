<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2000);
        $movie->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2020/07/24/10/55/batman-5433675_960_720.jpg');
        $movie->addActor($this->getReference('actor_7'));
        $movie->addActor($this->getReference('actor_6'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('The Joker');
        $movie2->setReleaseYear(2000);
        $movie2->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2015/04/07/02/11/batman-710392__340.jpg');
        $movie2->addActor($this->getReference('actor_7'));
        $movie2->addActor($this->getReference('actor_6'));
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('The Cat Woman');
        $movie3->setReleaseYear(2000);
        $movie3->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie3->setImagePath('https://cdn.pixabay.com/photo/2015/12/31/18/01/cat-woman-1115933__340.jpg');
        $movie3->addActor($this->getReference('actor_5'));
        $movie3->addActor($this->getReference('actor_3'));
        $movie3->addActor($this->getReference('actor_4'));
        $manager->persist($movie3);

        $movie4 = new Movie();
        $movie4->setTitle('Avengers Endgame');
        $movie4->setReleaseYear(2000);
        $movie4->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie4->setImagePath('https://cdn.pixabay.com/photo/2020/07/02/19/36/marvel-5364165__340.jpg');
        $movie4->addActor($this->getReference('actor_2'));
        $movie4->addActor($this->getReference('actor_3'));
        $movie4->addActor($this->getReference('actor_4'));
        $movie4->addActor($this->getReference('actor_5'));
        $manager->persist($movie4);

        $movie5 = new Movie();
        $movie5->setTitle('The Loki');
        $movie5->setReleaseYear(2000);
        $movie5->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie5->setImagePath('https://cdn.pixabay.com/photo/2021/08/01/20/40/loki-6515316__340.png');
        $movie5->addActor($this->getReference('actor_6'));
        $movie5->addActor($this->getReference('actor_2'));
        $movie5->addActor($this->getReference('actor_3'));
        $movie5->addActor($this->getReference('actor_4'));
        $manager->persist($movie5);

        $movie6 = new Movie();
        $movie6->setTitle('The Thanos');
        $movie6->setReleaseYear(2000);
        $movie6->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie6->setImagePath('https://cdn.pixabay.com/photo/2021/01/28/01/05/toy-5956681__340.jpg');
        $movie6->addActor($this->getReference('actor_7'));
        $movie6->addActor($this->getReference('actor_2'));
        $movie6->addActor($this->getReference('actor_3'));
        $movie6->addActor($this->getReference('actor_4'));
        $manager->persist($movie6);

        $movie7 = new Movie();
        $movie7->setTitle('The Captain America');
        $movie7->setReleaseYear(2000);
        $movie7->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie7->setImagePath('https://cdn.pixabay.com/photo/2019/02/28/23/33/captain-america-4027077__340.png');
        $movie7->addActor($this->getReference('actor_4'));
        $movie7->addActor($this->getReference('actor_2'));
        $manager->persist($movie7);

        $movie8 = new Movie();
        $movie8->setTitle('Beauty And The Beast');
        $movie8->setReleaseYear(2000);
        $movie8->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie8->setImagePath('https://cdn.pixabay.com/photo/2015/09/29/12/53/beautiful-963893__340.jpg');
        $movie8->addActor($this->getReference('actor_8'));
        $manager->persist($movie8);

        $movie9 = new Movie();
        $movie9->setTitle('Lahoriye');
        $movie9->setReleaseYear(2000);
        $movie9->setDescription('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae autem tempore pariatur quasi commodi temporibus labore magnam! Earum quam, temporibus quae eveniet illum unde? Quia minima velit alias quas iste.');
        $movie9->setImagePath('https://cdn.pixabay.com/photo/2020/01/25/18/47/lahore-4793144_960_720.jpg');
        $movie9->addActor($this->getReference('actor_1'));
        $manager->persist($movie9);
        
        $manager->flush();
    }
}
