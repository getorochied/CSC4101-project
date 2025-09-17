# CSC4101-project

## Project Overview
This is a Symfony web application for a community sharing an inventory of objects. The application allows users to manage their personal inventories and share galleries of their objects with other community members.

## Domain Selection
**MiNET Association Project Management System**

This application is designed for the MiNET student association to manage their technology and network projects. The nomenclature mapping:
- **[objet]** → **Project** (individual projects the association works on)
- **[inventaire]** → **Portfolio** (a member's collection of projects they're involved in)
- **[galerie]** → **Showcase** (public display of selected projects to demonstrate MiNET's work)

### Core Features:
- Project management with status tracking and progression indicators
- Member profiles with competency tracking across different domains
- Project TODO lists and task management
- Team assignment and collaboration features
- Public showcases of ongoing and completed projects

## Technical Setup
- **Framework**: Symfony 6.4 LTS
- **Database**: SQLite (for development)
- **PHP Version**: 8.4.12
- **Package Manager**: Composer

## Project Status
✅ **Completed:**
- Symfony project initialization
- Basic project structure setup
- Development server tested and working
- Git repository configured

🚧 **Next Steps:**
- Choose domain and define nomenclature
- Configure database (SQLite)
- Create initial entities
- Set up data fixtures

## Development Commands
```bash
# Start development server
symfony server:start

# Stop development server  
symfony server:stop

# Install dependencies
symfony composer install

# Clear cache
symfony console cache:clear
```

## Useful Resources
- [Cahier des charges](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/cahier-charges-projet.html)
- [Guide de réalisation du projet](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/projet/)
- [TP début projet](https://www-inf.telecom-sudparis.eu/COURS/CSC4101/tp-debut-projet/)