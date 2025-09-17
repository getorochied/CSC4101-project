# CSC4101 Project TODO

## 0. Preparation
- [ ] Read the full [Cahier des charges](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/cahier-charges-projet.html) and keep it bookmarked.
- [ ] Choose your domain (e.g., guitars, vinyls, cards, etc.) and define your specific nomenclature for entities ([objet], [inventaire], [galerie], etc.).
- [ ] Draw a UML or Entity-Association diagram for your data model (optional, but recommended for clarity).

## 1. Project Initialization
- [ ] Create a new directory for your project.
- [ ] Initialize a Git repository and configure your user/email.
- [ ] Create a new Symfony project using the recommended command.
- [ ] Remove unnecessary Symfony bundles (e.g., symfony/ux-turbo).
- [ ] Load the project in your IDE.

## 2. First Launch & Documentation
- [ ] Test launching the Symfony application (`symfony server:start`).
- [ ] Note useful resources and document your progress in `README.md`.
- [ ] Create a `TODO.md` file to track tasks (this file!).

## 3. Data Model: Initial Entities
- [ ] Configure the database to use SQLite in `.env`.
- [ ] Add support for DataFixtures (`symfony composer require --dev orm-fixtures`).
- [ ] Create initial entities for your domain:
    - [ ] [Inventaire] (e.g., Rack, Collection, etc.)
    - [ ] [Objet] (e.g., Guitar, Card, etc.)
- [ ] Define minimal properties for each entity (e.g., description, name).
- [ ] Establish OneToMany association: [Inventaire] → [Objet].
- [ ] Generate and load test data using Fixtures.

## 4. First Pages: Front-Office
- [ ] Generate a controller for [Inventaire] (`make:controller`).
- [ ] Implement:
    - [ ] List view for all [Inventaires] (admin only).
    - [ ] Detail view for a single [Inventaire] (owner only).
    - [ ] Links from list to detail pages.
- [ ] Generate a controller for [Objet] and implement detail view.
- [ ] Add navigation from [Inventaire] to its [Objets] and vice versa.

## 5. Templates & Styling
- [ ] Create Twig templates for all views.
- [ ] Add Bootstrap for styling:
    - [ ] Download and integrate a Bootstrap theme (e.g., Shop Homepage).
    - [ ] Configure asset paths in Symfony.
    - [ ] Add navigation menus using Bootstrap Menu Bundle.
- [ ] Customize templates for [Inventaire], [Objet], and [Galerie].

## 6. Members & Authentication
- [ ] Add the Member entity using `make:user` (not `make:entity`).
- [ ] Establish OneToOne association: Member ↔ [Inventaire].
- [ ] Add properties to Member (name, description, etc.).
- [ ] Add authentication (login form, password hashing).
- [ ] Generate and load test members using Fixtures.

## 7. Galleries
- [ ] Add [Galerie] entity with minimal properties (description, published).
- [ ] Establish associations:
    - [ ] Member → [Galerie] (OneToMany)
    - [ ] [Galerie] ↔ [Objet] (ManyToMany)
- [ ] Generate CRUD controller for [Galerie] using `make:crud`.
- [ ] Implement contextualized views and forms for galleries.

## 8. Contextualization & Access Control
- [ ] Restrict access to data based on user roles (owner, admin).
- [ ] Contextualize CRUD operations for [Objet] and [Galerie] (creation, modification, deletion).
- [ ] Ensure only public galleries are visible to all; private ones to owners/admins.
- [ ] Implement custom query builders in forms to show only relevant [Objets] for a member.

## 9. Images & Media (Optional)
- [ ] Add support for uploading and displaying images for [Objets].
- [ ] Display images in [Galerie] views.

## 10. Data Consistency & Cleanup
- [ ] Ensure proper deletion of associated data (cascade deletes, ManyToMany cleanup).
- [ ] Test with realistic fixtures and verify database integrity.

## 11. Advanced Features (Optional)
- [ ] Add flash messages for CRUD operations.
- [ ] Implement bookmarks (marque-pages) for favorite [Objets] (using cookies/sessions).
- [ ] Add comments or messaging (only if time allows).

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