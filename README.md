# Project Setup Instructions

This document provides detailed instructions for setting up and running the project on your local machine. Please follow the steps below carefully to ensure a smooth setup process.

---

## Step 1: Clone the Project

Clone the project repository to your local machine using your preferred method (e.g., HTTPS, SSH, or GitHub CLI). Run the following command in your terminal:

```git clone https://github.com/MatheusMello95/PokemonPage.git```

## Step 2: Install Dependencies

Navigate to the project folder using the terminal:

```cd PokemonPage```

Then, install all the required dependencies by running:

```composer install```

This will ensure that all necessary packages and libraries for the project are properly set up.

## Step 3: Start the Local Server

Run the following command in the terminal to start a local server for the application:

```symfony serve```

This will initialize a local server where you can execute and test the application.

## Step 4: Access the Application

Once the server is running, open your web browser and navigate to the following URL:

```https://127.0.0.1:8000```

This will give you access to the project’s user interface.

## Step 5: Navigate and Interact

Browse the application’s homepage to view the available cards.

Select a card to view detailed information about a specific Pokémon.

On the card detail page, you will find relevant information about the chosen Pokémon.

To return to the homepage, click the "Back to Cards" button provided on the card detail page.

## Step 6: Run Tests

To execute the test suite provided in the project, use the following command in the terminal:

```./vendor/bin/phpunit```

This command will run all test classes and provide feedback on the application’s functionality.

---

Notes

Ensure that you have the necessary prerequisites installed on your machine, such as PHP, Composer, and Symfony CLI.

If you encounter any issues during setup or execution, consult the project documentation or reach out to the project maintainer for support.
