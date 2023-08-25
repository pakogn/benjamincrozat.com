<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Merchant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : void
    {
        Category::factory()->createQuietly([
            'name' => 'Alpine.js',
            'description' => 'Alpine.js is a lightweight JavaScript framework for pragmatic developers building reactive web interfaces.',
            'long_description' => '**Alpine.js offers a sprinkle of interactivity to your sites in a lightweight and intuitive package.** Dive into Alpine.js and discover a simpler way to breathe life into your web pages without the heavy lifting!',
            'primary_color' => '[#77c1d2]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'CSS',
            'description' => 'CSS, or Cascading Style Sheets, is a language used to define and apply styles (like fonts, colors, and spacing) to your favorite web pages.',
            'long_description' => "**CSS is the magic wand that transforms the basic structure of a web page into a visual masterpiece.** With it, you can dictate the colors, fonts, and layout, bringing your design visions to life on the digital canvas. Dive into CSS, and you'll discover a world where the line between art and code beautifully blurs.",
            'primary_color' => '[#264bdd]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Databases',
            'description' => 'Databases are the unsung heroes of our digital world, turning chaos into organized, accessible knowledge.',
            'long_description' => "**Databases are the hidden powerhouses behind most of our favorite apps, websites, and services, organizing and storing data like a vast digital library.** Imagine having the knowledge to structure information efficiently and retrieve it in an instant. Dive into the world of databases, and you'll discover a fascinating blend of logic, design, and technology that touches every aspect of our digital lives.",
            'primary_color' => 'stone-600',
        ]);

        Category::factory()->createQuietly([
            'name' => 'GPT',
            'description' => 'GPT, or Generative Pre-trained Transformers, is a revolutionary LLM (Large Language Model) that changed world of artificial intelligence forever.',
            'long_description' => "**GPT is a groundbreaking artificial intelligence model designed to understand and generate human-like text** based on the context it's given. **Its applications are vast, from answering queries to crafting creative content.** Discover the future of digital communication and content generation!",
            'primary_color' => '[#12a37e]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Hosting',
            'description' => 'Choose the right cloud hosting for your web applications and ensure their stability over time.',
            'long_description' => '**Choosing a quality cloud host for your web application is like securing a strong foundation for your dream home.** With the right one, you can ensure optimal performance, security, and scalability, letting your application thrive and adapt to the changing digital landscape.',
            'primary_color' => 'gray-700',
        ]);

        Category::factory()->createQuietly([
            'name' => 'HTML',
            'description' => 'HTML, or HyperText Markup Language, is the standard markup language used to create and structure content for the web, which is then displayed by browsers.',
            'content' => <<<'MARKDOWN'
## What is HTML?

Imagine a Lego house. Each Lego brick represents a piece of content on a webpage: a paragraph, a headline, an image, etc. HTML is like the guide or instruction manual that shows you how to assemble these bricks into a structured house. It's the foundation of any website.

## HTML's basic definition

HTML stands for "HyperText Markup Language." At its heart, it's a way to describe the structure of a webpage using different "tags." These tags tell the browser, like [Safari](https://www.apple.com/safari/), [Chrome](https://www.google.com/chrome/) or [Firefox](https://www.mozilla.org/firefox/new/), how to display the content.

## Why do we use HTML?

Let's go back to our Lego analogy. Without the guide or instruction manual (HTML), you'd just have a bunch of random Lego pieces. They might be colorful and interesting, but they wouldn't come together to form a recognizable house. HTML helps you to:

- **Organize content**: HTML helps in arranging content in a logical manner. Headlines, paragraphs, lists, links, and more are placed where they make sense.
- **Display media**: HTML can embed images, videos, and other multimedia elements into a page.
- **Create links**: One of the unique things about the web is the ability to jump from one page to another with a click. HTML makes this possible through hyperlinks.

## What HTML is made of

A webpage built with HTML consists of various "elements", each defined by "tags". Here's a simple breakdown:

- **Tags**: These are the building instructions. For instance, to start a paragraph, you'd use the `<p>` tag, and to end it, you'd use the `</p>` tag.
- **Attributes**: Think of these as additional instructions or modifiers for your Lego pieces. For instance, if you wanted a particular brick (or piece of content) to be a certain color or style, you'd use an attribute.
- **Content**: This is the actual text, image, or whatever you're displaying. Using our analogy, this is the design or picture on each Lego brick.

## HTML in comparison

Continuing with our house analogy from before:

- **HTML is like the blueprint of a house.** It defines where everything goes: the walls, doors, windows, and roof.
- **[CSS](/categories/css) is like the decor and paint.** It specifies the colors, styles, and overall look of the house.
- **[JavaScript](/categories/javascript) is the tech gadgets and electricity.** It adds functionality like turning on TVs, adjusting thermostats, and more.
- **[PHP](/categories/php) (or other backend languages such as Python and Ruby) is the plumbing and hidden mechanisms that make certain features possible**, like having running water on demand.
MARKDOWN,
            'primary_color' => '[#dc4a24]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Inertia.js',
            'description' => 'Create modern single-page React, Svelta, and Vue apps using classic server-side routing. Inertia.js works with any backend, and is tuned for Laravel.',
            'primary_color' => '[#8e59ea]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'JavaScript',
            'description' => 'JavaScript is a versatile, high-level programming language that makes the web less boring by adding dynamic behavior.',
            'long_description' => 'JavaScript breathes life into modern web pages, turning static content into dynamic, interactive experiences. **With its vast ecosystem, from frameworks to libraries, mastering JavaScript opens doors to endless creative possibilities.** Ready to unlock the magic?',
            'primary_color' => '[#e8d44e]',
            'secondary_color' => 'black',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Laravel',
            'description' => 'Laravel is a world-class web application framework with an expressive and elegant syntax used by the biggest companies in the world.',
            'long_description' => "Laravel is a modern, elegant PHP framework that makes web development a breeze. With its expressive syntax, powerful tools, and vibrant community, **diving into the framework promises not only to elevate your coding skills but also to make the journey enjoyable**. Laravel might just be the magic touch you're looking for!",
            'primary_color' => '[#f13d2e]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Livewire',
            'description' => 'Livewire is what enable Laravel developers to build interactive web applications without the hassle of dealing with complex JavaScript workflows.',
            'long_description' => '**Livewire seamlessly integrates with Laravel, allowing developers to build dynamic, modern web applications without leaving the comfort of their favorite programming language.** It blends the best of both worlds: the simplicity of Laravel and the reactivity of modern JavaScript frameworks.',
            'primary_color' => '[#eb5a97]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'MySQL',
            'description' => 'MySQL is a popular database system used to store, organize, and retrieve data for websites and apps.',
            'primary_color' => '[#3d6e93]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'PHP',
            'description' => 'PHP, or Hypertext Preprocessor, is a server-side scripting language designed for web development, enabling you to create web application that can change while you are sleeping.',
            'long_description' => "**PHP makes starting your coding journey wonderfully accessible, thanks to its straightforward syntax and beginner-friendly nature.** With its **vast and supportive community**, there's always someone ready to lend a hand or share expertise. Plus, the **extensive ecosystem of tools and libraries** ensures that as your skills grow, PHP continues to offer endless possibilities.",
            'content' => <<<'MARKDOWN'
## What is PHP?

Imagine a talented chef in the kitchen of a restaurant. Customers come in, look at the menu, and place their order.

The chef, depending on the order, picks the right ingredients, cooks them, and serves the dish exactly the way the customer likes it. PHP is like that chef. It prepares and delivers web pages based on what users ask for.

## PHP's basic definition

PHP stands for "Hypertext Preprocessor". At its core, it's a programming language used to create dynamic web pages. Dynamic means that the content can change depending on different factors, like who's visiting or what time it is.

## Why do we use PHP?

Imagine going to a restaurant where every dish is pre-cooked and left on a table. You have to choose from what's available, even if it's not fresh or exactly what you want. Without something like PHP, websites would be a lot like this restaurant - serving the same static content to everyone.

With PHP (our talented chef), websites can:
- **Interact with databases**: It can pull information, like articles or user data, from a storage area called a database. This is like our chef fetching fresh ingredients from the fridge.
- **Personalize content**: Depending on who's visiting, PHP can change the content of a web page. If you have a profile on a website, PHP helps show your profile data, not someone else's.
- **Process forms**: When you fill out a form on a website, PHP can handle that information, kind of like when you give special cooking instructions to a chef.

## Where is PHP used?

PHP is behind the scenes of many websites. Some of the biggest online platforms, like Facebook and Wikipedia, started with PHP.

When you visit a website powered by PHP, you don't see the PHP code itself. Just like in our restaurant, you don't see the chef cooking; you only see (and taste) the final dish.

## PHP in comparison

Think of building a website as constructing a house.

- **[HTML](/categories/html) is like the bricks and mortar**; it gives structure to the house.
- **[CSS](/categories/css) is the paint, wallpaper, and decorations**; it makes the house look good.
- **[JavaScript](/categories/javascript) is like the electricity and gadgets**; it adds interactive features to the house, like lights that turn on or off.
- And then there's PHP. **PHP is like the plumbing.** You don't always see it, but it's essential for delivering fresh water on demand and taking away waste. It works in the background to ensure the house is functional and can adapt to the needs of its inhabitants.

So, in summary, PHP is a behind-the-scenes hero of the web, working like a skilled chef or the hidden plumbing in a house, making sure users get fresh, personalized content on demand.
MARKDOWN,
            'primary_color' => '[#4f5b93]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Security',
            'description' => 'Learn how to protect your Laravel applications from common security vulnerabilities.',
            'long_description' => "**Security is the bedrock upon which digital trust is built.** When developers prioritize security, they're not just protecting data, they're fostering a deep trust with their users. Dive into security, and you'll discover **it's more than just protocols; it's a commitment to keeping promises in our digital age**.",
            'primary_color' => 'orange-700',
        ]);

        Category::factory()->createQuietly([
            'name' => 'SEO',
            'description' => 'Coding is great, but having real users is even better. Learn how to build sustainable long-term traffic with Search Engine Optimization (SEO).',
            'long_description' => "**SEO is like planting a seed for a tree that grows steadily, providing consistent and organic traffic over time.** In contrast, while social media can give you instant bursts of attention, they often fade quickly like fireworks. **If you're looking to build a sustainable digital presence, diving into SEO is like nurturing a garden that'll bear fruit year after year.**",
            'primary_color' => '[#4285f4]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Tailwind CSS',
            'description' => 'Tailwind CSS is a utility-first framework that will make you fall in love with UI design again, and teach you to always question the status quo.',
            'long_description' => "**Tailwind CSS revolutionizes the way we approach design, favoring a pragmatic perspective over traditional best practices that often fall short in real-world applications.** By leveraging its utility-first classes, developers can rapidly craft intuitive and responsive UIs without the usual CSS fuss. If you're looking to breathe fresh air into your web design journey, Tailwind might just be the breeze you need.",
            'primary_color' => '[#38bdf9]',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Testing',
            'description' => 'Testing is the most important step to ensure the stability of your web applications. Learn how to write tests that makes you confident when deploying new code.',
            'long_description' => "**Automated testing is like a safety net for your code, catching mistakes before they reach your users.** It's the guardian that ensures stability, making deployments a breeze rather than a guessing game. Dive into it, and you'll find peace of mind in every line of code you write.",
            'primary_color' => 'lime-600',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Tools',
            'description' => "The toolbelt of a developer is what allows them to do their magic. It's important to keep up with the latest and find new ways to be more productive and getting your time back.",
            'long_description' => '**Developer tools are like the magic wands of the tech world, effortlessly turning hours of manual labor into mere minutes of automated brilliance.** With the right ones in their arsenal, developers not only fast-track their projects but also dive deeper into innovation.',
            'primary_color' => 'violet-600',
        ]);

        Category::factory()->createQuietly([
            'name' => 'Vue.js',
            'description' => 'Vue.js is an approachable, performant and versatile framework for building web user interfaces.',
            'primary_color' => '[#42b883]',
        ]);

        Merchant::factory(10)->create();
    }
}
