#Getting started

See this thread for reference: [Save Polymorphic table](https://laracasts.com/discuss/channels/eloquent/save-polymorphic-table)

1. Clone this repository
  - Using SSH `git@github.com:alenabdula/laravel-polymorphic-relations.git`
  - Using HTTP `https://github.com/alenabdula/laravel-polymorphic-relations.git`
2. Install framework dependencies: `composer install`, if using Laravel Elixir install Node dependencies: `npm install`
3. Create `.env` file, configure your environment and database, see my local configuration in `.env.example` file. If you decide to use sqlite, make sure to create `database.sqlite` inside `database/` directory.
4. Migrate your database: `php artisan migrate`
5. Start local server: `php artisan serve` and visit [localhost:8000](http://localhost:8000), if `8000` port is used, try `php artisan serve --port 8888`

##Application Routes

1. GET: `/` - Home Route
2. GET: `/article` - `article.index` - Display all articles
3. POST: `/article` - `article.store` - Create article
4. GET: `/article/create` - `article.create` - Display form to create new article
5. GET: `/article/{article}` - `article.show` - Display particular article
6. PUT|PATCH: `/article/{article}` - `article.update` - Update article
7. DELETE: `/article/{article}` - `article.destroy` - Delete article
8. GET: `/article/{article}/edit` - `article.edit` - Display form to edit article
9. POST: `/article/{id}/comment` - `article.comment.store` - Create comment for particular article

##Assets

- __JavaScript__, I've added single method to Vue instance named `destroy`, it's used to confirm and delete particular article. It displays confirm prompt and submits form.