# question

<h1>Installation</h1>
<p>Via Composer</p>

<pre>composer require ufukozcantr/question</pre>
<p>For publishing the configuration file:</p>

<pre>php artisan vendor:publish --provider="ufukozcantr\Question\Providers\ServiceProvider" </pre>
<p>Create the continents, countries, cities and districts and other tables:</p>

<pre>php artisan migrate</pre>
<p>Seed the tables:</p>

<pre>php artisan db:seed --class=ufukozcantr\\Question\\Database\\Seeders\\QuestionsTableSeeder</pre>
