# CSC4101 Project TODO

## 0. Preparation
- [x] Read the full [Cahier des charges](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/cahier-charges-projet.html) and keep it bookmarked.
- [x] Choose your domain (MiNET Association Project Management) and define your specific nomenclature for entities:
    - [objet] → Project
    - [inventaire] → Portfolio  
    - [galerie] → Showcase
- [ ] Draw a UML or Entity-Association diagram for your data model (optional, but recommended for clarity).

## 1. Project Initialization
- [x] Create a new directory for your project.
- [x] Initialize a Git repository and configure your user/email.
- [x] Create a new Symfony project using the recommended command.
- [x] Remove unnecessary Symfony bundles (e.g., symfony/ux-turbo).
- [ ] Load the project in your IDE.

## 2. First Launch & Documentation
- [x] Test launching the Symfony application (`symfony server:start`).
- [x] Note useful resources and document your progress in `README.md`.
- [x] Create a `TODO.md` file to track tasks (this file!).

## 3. Data Model: Initial Entities
- [ ] Configure the database to use SQLite in `.env`.
- [ ] Add support for DataFixtures (`symfony composer require --dev orm-fixtures`).
- [ ] Create initial entities for your domain:
    - [ ] Portfolio (member's collection of projects)
    - [ ] Project (individual projects with status, description, etc.)
- [ ] Define minimal properties for each entity:
    - Portfolio: description, member
    - Project: name, description, status, startDate, etc.
- [ ] Establish OneToMany association: Portfolio → Project.
- [ ] Generate and load test data using Fixtures.

## 4. First Pages: Front-Office
- [ ] Generate a controller for Portfolio (`make:controller`).
- [ ] Implement:
    - [ ] List view for all Portfolios (admin only).
    - [ ] Detail view for a single Portfolio (owner only).
    - [ ] Links from list to detail pages.
- [ ] Generate a controller for Project and implement detail view.
- [ ] Add navigation from Portfolio to its Projects and vice versa.

## 5. Templates & Styling
- [ ] Create Twig templates for all views.
- [ ] Add Bootstrap for styling:
    - [ ] Download and integrate a Bootstrap theme (e.g., Shop Homepage).
    - [ ] Configure asset paths in Symfony.
    - [ ] Add navigation menus using Bootstrap Menu Bundle.
- [ ] Customize templates for Portfolio, Project, and Showcase views.

## 6. Members & Authentication
- [ ] Add the Member entity using `make:user` (not `make:entity`).
- [ ] Establish OneToOne association: Member ↔ Portfolio.
- [ ] Add properties to Member (name, competencies, role in association, etc.).
- [ ] Add authentication (login form, password hashing).
- [ ] Generate and load test members using Fixtures.

## 7. Showcases
- [ ] Add Showcase entity with minimal properties (description, published, theme).
- [ ] Establish associations:
    - [ ] Member → Showcase (OneToMany)
    - [ ] Showcase ↔ Project (ManyToMany)
- [ ] Generate CRUD controller for Showcase using `make:crud`.
- [ ] Implement contextualized views and forms for showcases.

## 8. Contextualization & Access Control
- [ ] Restrict access to data based on user roles (project member, admin).
- [ ] Contextualize CRUD operations for Project and Showcase (creation, modification, deletion).
- [ ] Ensure only public showcases are visible to all; private ones to members/admins.
- [ ] Implement custom query builders in forms to show only relevant Projects for a member.

## 9. Images & Media (Optional)
- [ ] Add support for uploading and displaying project screenshots/images.
- [ ] Display project images in Showcase views.
- [ ] Add project documentation file uploads.

## 10. Data Consistency & Cleanup
- [ ] Ensure proper deletion of associated data (cascade deletes, ManyToMany cleanup).
- [ ] Test with realistic fixtures and verify database integrity.

## 11. Advanced Features (Optional)
- [ ] Add flash messages for CRUD operations.
- [ ] Implement project TODO lists and task management.
- [ ] Add project progression indicators and status tracking.
- [ ] Create competency profiles for members (skills in different domains).
- [ ] Add team assignment features for projects.
- [ ] Implement project bookmarks/favorites for interested members.

## 12. Finalization
- [ ] Review all controllers, templates, and routes.
- [ ] Test all user flows (admin, member, anonymous).
- [ ] Document any remaining TODOs or optional improvements.

---

**References:**
- [Cahier des charges](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/cahier-charges-projet.html)
- [Guide de réalisation du projet](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/)
- [TP début projet](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/tp-debut-projet/)

**Tip:** Work incrementally, commit often, and keep this TODO file updated as you progress!