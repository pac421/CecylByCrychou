<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Message;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create('fr_FR');

        // create the admin user
        $admin = new User();
        $admin->setFirstname('Christian');
        $admin->setLastname('CIESLIK');
        $admin->setEmail('christian.cieslik@libertysurf.fr');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword('admin');
        $admin->setCreatedAt(new \DateTime("now"));
        $manager->persist($admin);

        // create 20 fake users
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setFirstname($faker->firstName);
            $user->setLastname(strtoupper($faker->lastName));
            $user->setEmail($faker->email);
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($faker->password);
            $user->setCreatedAt($faker->dateTime);
            $manager->persist($user);
        }

        // create 20 fake messages
        for ($i = 0; $i < 20; $i++) {
            $message = new Message();
            $message->setName($faker->name);
            $message->setEmail($faker->email);
            $message->setMessage($faker->text);
            $message->setCreatedAt($faker->dateTime);
            $manager->persist($message);
        }

        $manager->flush();
    }
}
