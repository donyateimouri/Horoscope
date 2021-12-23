# Horoscope

Instructions: The project needs to be opened via a backend server (eg MAMP) to work properly. Save the project to the server's htdocs' folder.
<br>


# Assignment: 

The goal of the task is to build a simple REST API for its horoscope. You should at least use the following php files in your project:
<br>

### addHoroscope.php

The page should only be available via POST, it should check for a date of birth in $ _POST, calculate which horoscope the date of birth belongs to and save it in $ _SESSION.

If a horoscope is already saved, do not overwrite it. If the horoscope could not be calculated, nothing should be saved.
 
The page should not use echo or write any output other than true or false, depending on whether the horoscope was saved.
<br>


### viewHoroscope.php

The page should only be available via GET, it should check if a horoscope is saved in $ _SESSION and in that case print it in output. Otherwise, the page should not print anything.
<br>


### updateHoroscope.php

The page should only be available via POST (PUT is not available in php by default so we use POST instead), it should check for a date of birth in the POST data.

Calculate which horoscope the date of birth belongs to and update the saved horoscope found in $ _SESSION and print true.

If there is no horoscope in $ _SESSION, the page should not update anything and print false.
<br>

### deleteHoroscope.php
The page should only be available via DELETE, it should delete the saved horoscope in $ _SESSION and echo: a true. If nothing is saved, it should echo: a false.
<br>


### index.html (alternativt index.php)

The index page should contain an area (a div) where even a horoscope is printed when the page is loaded. It should also contain an input for one's birth number and three buttons:

 

The buttons must each have onClick running each Javascript function:
 <br>


### Button: "Save my horoscope"

onClick: should make a fetch call to addHoroscope.php with the contents of the input.

After the call, the contents of the div must be updated.

If you want style points, this button should only be visible if the horoscope has not been saved yet, or is otherwise deactivated - this is not a requirement
<br>


### Button: "Update my horoscope"
onClick: should make a fetch call to updateHoroscope.php with the contents of the input. After the call, the contents of the div must be updated.

If you want style points, this button should not be visible or disabled if the horoscope is not saved yet - this is not a requirement.
<br>


### Button: "Delete my horoscope"

onClick: should make a fetch call to deleteHoroscope.php. After the call, the contents of the div should be updated if the horoscope was removed.

If you want style points, this button should not be visible or disabled if the horoscope is not saved yet - this is not a requirement

When you first go to the page, the div must also be updated via a call to viewHoroscope, it is smart to save this call in a function and call it at the end of each button's onClick function.
<br>
