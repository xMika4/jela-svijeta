# **Jela Svijeta**

## **Overview**

"Jela Svijeta" is a Laravel 10 - based application that allows users to explore a world of dishes, ingredients, categories, and tags. This multilingual application provides an API for listing dishes based on various parameters.

## **Features**

- List dishes based on different filters such as category, tags, language, and more.
- Multilingual support for dishes, ingredients, categories, and tags.
- Use of Astrotomic Laravel Translatable package for managing translations.
- Use of Jzonta FakerRestaurant package for generating random food names.
- Includes endpoint for listing dishes with flexible querying.

## **Installation**

1. Clone the repository to your local machine:
    
    ```bash
    
    git clone https://github.com/xMika4/jela-svijeta.git
    ```
    
2. Navigate to the project directory:
    
    ```bash
    
    cd jela-svijeta
    ```
    
3. Install Composer dependencies:
    
    ```bash
    
    composer install
    
    ```
    
4. Create and configure the **`.env`** file based on the provided **`.env.example`**.
5. Generate the application key:
    
    ```bash
    
    php artisan key:generate
    ```
    
6. Run database migrations and seeders to populate tables:
    
    ```bash
    
    php artisan migrate --seed
    ```
    

## **Usage**

To list dishes, make a GET request to the following endpoint: /api/v1/meals

### **Request Parameters**

- **`lang`**: Language parameter (required).
- **`per_page`**: Number of results per page.
- **`page`**: Page number.
- **`with`**: List of additional data to include in the response (ingredients, category, tags).
- **`category`**: ID of the category to filter results by.
- **`tags`**: List of tag IDs to filter results by.
- **`category`**: List of category IDs to filter results by.
- **`ingredient`**: List of ingredient IDs to filter results by.
- **`diff_time`**: Displays the status as 'created' 'modified' or 'deleted' and shows deleted meals.

Example Request:

```

/api/v1/meals?per_page=5&tags=2&lang=hr&with=ingredients,category,tags&diff_time=1493902343&page=2

```

### **Response**

The response will include an array of dishes, each with the following properties:

- **`id`**: ID of the dish.
- **`title`**: Name of the dish in the specified language.
- **`description`**: Description of the dish in the specified language.
- **`category`**: Category information (if requested).
- **`ingredients`**: Ingredients used in the dish (if requested).
- **`tags`**: Tags associated with the dish (if requested).
- **`status`**: Status of the dish (created, modified, deleted) based on **`diff_time`**.

### **License**

This project is licensed under the MIT License.

## **Contact**

For any inquiries, please contact **[Mihael Baivić](mailto:baivic.mihael@gmail.com)**.

---

This README provides a basic structure for your project documentation. You can customize and expand it further based on your project's specific details and additional functionalities.
