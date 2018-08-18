# grootcms
Unbelievably Small PHP Flat File CMS. No bells. No Whistles.

## Installation
Clone this repository and use it as your root folder.

## Adding content
Write your content as markdown files in the 'content' folder.
Sample URLs and corresponding files loaded shown below:
* 'example.com/' : content/index.md
* 'example.com/page1': content/page1.md
* 'example.com/page2': content/page2/index.md (if content/page2/index.md is not found, content/page2.md is loaded)
* 'example.com/page2/a': content/page2/a.md

## Styling
Groot CMS comes with no bootstrap, angular, material design, framework, twig, leaf, bells, whistles, infinity stones, whatever.
index.php is your template page. Use plain HTML, CSS, JavaScript, whatever you'd like to do the styling. The php include statement you see in the index.php file inserts the rendered content at that position. Thats it
