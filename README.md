# HexGrid

HexGrid is a unified library platform developed by iAcademy for academic institutions to address the evolving needs of the digital age. It aims to optimize library operations and enhance the overall user experience by integrating sophisticated technology solutions. The platform aims to revolutionize resource management, access, and utilization, thereby bridging gaps within traditional library management frameworks. The HexGrid is a testament to iAcademy's unwavering commitment to fostering an educational environment that is modern, efficient, and conducive to learning, research, and academic excellence.

## Features
- Unified library platform for academic institutions
- Optimizes library operations
- Enhances user experience with sophisticated technology
- Revolutionizes resource management, access, and utilization

## Installation

To set up HexGrid on your local machine, follow these steps:

1. Install composer dependencies:
    ```sh
    composer install
    ```

2. Generate an application key:
    ```sh
    php artisan key:generate
    ```

3. Open the project in a code editor, rename `.env.example` to `.env`, and modify the database name, username, and password to match your environment.

4. Migrate the database along with seed data:
    ```sh
    php artisan migrate
