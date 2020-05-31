# dynamic_card_grid_php
Card grid using Bootstrap cards and basic coding to make these mobile responsive

Issue: CSS Grid is great, but I wanted to make the grid dynamic and put advanced Bootstrap 4 cards in each of the divs. I also wanted this to work 
as intended with the CSS coding to make everything responsive. 

Also, I needed to reduce some code by using <?php echo ?> statements within the DOM elements, instead of echoing out every single line of code for the cards. 

Solution: It took some trial and error, but after arranging and working with div locations and placement of the foreach loop for the JSON code rendering,
we finally got this to work. A media query is also added (not needed if this were a static application) to show the desirable single-column display when using a smartphone or device smaller than 500px. 

For the JSON code, I 





<img width="1090" alt="Screen Shot 2020-05-31 at 10 30 41 AM" src="https://user-images.githubusercontent.com/22375594/83356176-ce660300-a329-11ea-9a8f-37fc29e53194.png">
<img width="635" alt="Screen Shot 2020-05-31 at 10 30 25 AM" src="https://user-images.githubusercontent.com/22375594/83356178-cf973000-a329-11ea-8b2d-fa35131de4c2.png">

