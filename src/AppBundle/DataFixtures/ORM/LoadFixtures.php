<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Item;
use AppBundle\Entity\Facilitator;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $this->loadFacilitators($manager);
        $this->loadItems($manager);
    }

    private function loadFacilitators(ObjectManager $manager)
    {
        foreach (range(1, 30) as $i) {
            $facilitator = new Facilitator();

            $facilitator->setName($this->getRandomName());
            $facilitator->setSite($this->getRandomSite());
            $facilitator->setProfile($this->getRandomProfile());

            $manager->persist($facilitator);
        }

        $manager->flush();
    }

    private function loadItems(ObjectManager $manager)
    {
        foreach (range(1, 20) as $i) {
            $item = new Item();

            $item->setName($this->getRandomItem());

            $manager->persist($item);
        }

        $manager->flush();
    }

    private function getNames()
    {
        return [
            'Juan Perez',
            'John Doe',
            'Karen Doe',
            'Donald Thrump',
            'Kenny Omega',
            'Tetsuya Naito',
            'Miroslav Klose',
            'Frank Kafka',
            'Kota Ibushi'
        ];
    }

    private function getSites()
    {
        return [
            'http://www.google.com.jp',
            'http://www.twitter.com.jp',
            'http://www.thinder.com.jp',
            'http://www.groovy.com.jp',
            'http://www.grails.com.jp',
            'http://www.symfony.com.jp',
            'http://www.react.com.jp',
            'http://www.vue.com.jp',
        ];
    }

    private function getProfiles()
    {
        return [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nihil, repellendus. Autem consequuntur facilis ad ea tempora placeat sed rem optio unde excepturi reiciendis, laudantium in totam vitae illo, enim.',
            'Lorem ipsum dolor sit amet',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nihil.',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nihil, repellendus. Autem.',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nihil, repellendus. Autem consequuntur facilis ad ea tempora placeat sed rem optio unde excepturi reiciendis.',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, nihil, repellendus. Autem consequuntur laudantium in totam vitae illo, enim.',
        ];
    }

    private function getRandomName()
    {
        $names = $this->getNames();

        return $names[array_rand($names)];
    }

    private function getRandomSite()
    {
        $sites = $this->getSites();

        return $sites[array_rand($sites)];
    }

    private function getRandomProfile()
    {
        $profiles = $this->getProfiles();

        return $profiles[array_rand($profiles)];
    }

    private function getItems()
    {
        return [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
            'Item 5',
            'Item 6',
            'Item 7',
            'Item 8',
        ];
    }

    private function getRandomItem()
    {
        $items = $this->getItems();

        return $items[array_rand($items)];
    }
}