<?php

namespace App\DataFixtures;

use App\Entity\Portfolio;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Create portfolios for different MiNET members
        $portfolios = [];
        
        // Portfolio 1: Network Infrastructure Team
        $portfolio1 = new Portfolio();
        $portfolio1->setDescription('Network Infrastructure and Security Projects');
        $manager->persist($portfolio1);
        $portfolios[] = $portfolio1;
        
        // Portfolio 2: Web Development Team
        $portfolio2 = new Portfolio();
        $portfolio2->setDescription('Web Applications and Digital Services');
        $manager->persist($portfolio2);
        $portfolios[] = $portfolio2;
        
        // Portfolio 3: System Administration
        $portfolio3 = new Portfolio();
        $portfolio3->setDescription('System Administration and DevOps Projects');
        $manager->persist($portfolio3);
        $portfolios[] = $portfolio3;
        
        // Create projects for Portfolio 1 (Network Infrastructure)
        $project1 = new Project();
        $project1->setName('Campus WiFi Upgrade');
        $project1->setDescription('Upgrade and secure the campus WiFi infrastructure with new access points and network segmentation');
        $project1->setStatus('active');
        $project1->setStartDate(new \DateTime('2024-09-01'));
        $portfolio1->addProject($project1);
        $manager->persist($project1);
        
        $project2 = new Project();
        $project2->setName('Network Security Monitoring');
        $project2->setDescription('Implement network monitoring tools and intrusion detection systems');
        $project2->setStatus('planning');
        $project2->setStartDate(new \DateTime('2024-10-15'));
        $portfolio1->addProject($project2);
        $manager->persist($project2);
        
        // Create projects for Portfolio 2 (Web Development)
        $project3 = new Project();
        $project3->setName('MiNET Website Redesign');
        $project3->setDescription('Complete redesign of the association website with modern technologies');
        $project3->setStatus('active');
        $project3->setStartDate(new \DateTime('2024-08-15'));
        $portfolio2->addProject($project3);
        $manager->persist($project3);
        
        $project4 = new Project();
        $project4->setName('Student Project Portal');
        $project4->setDescription('Web platform for students to showcase their projects and collaborate');
        $project4->setStatus('completed');
        $project4->setStartDate(new \DateTime('2024-06-01'));
        $portfolio2->addProject($project4);
        $manager->persist($project4);
        
        // Create projects for Portfolio 3 (System Administration)
        $project5 = new Project();
        $project5->setName('Docker Infrastructure');
        $project5->setDescription('Containerization of association services using Docker and Kubernetes');
        $project5->setStatus('active');
        $project5->setStartDate(new \DateTime('2024-09-10'));
        $portfolio3->addProject($project5);
        $manager->persist($project5);
        
        $project6 = new Project();
        $project6->setName('Backup System Overhaul');
        $project6->setDescription('Implementation of automated backup solutions for critical systems');
        $project6->setStatus('planning');
        $project6->setStartDate(new \DateTime('2024-11-01'));
        $portfolio3->addProject($project6);
        $manager->persist($project6);

        $manager->flush();
    }
}
