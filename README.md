
# **GestionRestaurant**

A Laravel-based project for managing a restaurant's categories, dishes, components, servers, and orders using Eloquent ORM relationships. This project demonstrates how to implement one-to-many, many-to-many, and pivot table relationships effectively.

## **Features**

- Manage **categories** of dishes.
- Track **plats (dishes)**, their details, and associated **composants (components)**.
- Assign **serveurs (servers)** to handle **commandes (orders)**.
- Track order states (`en cours`, `terminé`, `servi`, `emporté`) and payment status.
- Use Eloquent ORM to handle database relationships and queries.

## **Prerequisites**

- **PHP** >= 8.0
- **Composer**
- **Laravel** >= 10
- **MySQL** or any supported database
- Node.js and npm (for optional front-end scaffolding)

## **Installation**

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-repository/gestion-restaurant.git
   cd gestion-restaurant
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Set Up Environment**
   Copy the `.env.example` file to `.env` and configure the database:
   ```bash
   cp .env.example .env
   ```

   Update the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gestion_restaurant
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   Create the database structure:
   ```bash
   php artisan migrate
   ```

6. **Seed the Database**
   Populate the database with sample data:
   ```bash
   php artisan db:seed
   ```

7. **Serve the Application**
   Start the Laravel development server:
   ```bash
   php artisan serve
   ```

   Access the app at `http://localhost:8000`.


## **Project Structure**

- **Models**:
  - `Category`: Represents dish categories.
  - `Plat`: Represents dishes with details and pricing.
  - `Composant`: Represents dish components.
  - `Serveur`: Represents servers handling orders.
  - `Commande`: Represents orders and their state.
  - Pivot Tables: `ComposantPlat`, `CommandePlat`.

- **Database**:
  - Tables: `categories`, `plats`, `composants`, `composant_plat`, `serveurs`, `commandes`, `commande_plat`.

- **Relationships**:
  - One-to-Many: `Category` ↔ `Plat`, `Serveur` ↔ `Commande`.
  - Many-to-Many: `Plat` ↔ `Composant`, `Commande` ↔ `Plat`.

- **Seeders**:
  - Preloaded sample data for testing relationships.

## **Testing Relationships**

Use **Tinker** to test relationships:

1. Retrieve all plats in a category:
   ```php
   $category = App\Models\Category::find(1);
   $plats = $category->plats;
   ```

2. Retrieve all composants for a plat:
   ```php
   $plat = App\Models\Plat::find(1);
   $composants = $plat->composants;
   ```

3. Retrieve all commandes for a serveur:
   ```php
   $serveur = App\Models\Serveur::find(1);
   $commandes = $serveur->commandes;
   ```

4. Add a composant to a plat:
   ```php
   $plat->composants()->attach(1, ['quantite' => 200, 'unité' => 'grammes']);
   ```

## **Future Enhancements**

- Add front-end views using Blade or other front-end technologies.
