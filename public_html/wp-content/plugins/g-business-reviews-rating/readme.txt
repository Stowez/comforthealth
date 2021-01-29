=== Reviews and Rating – Google Business ===

Plugin Name: Reviews and Rating – Google Business
Plugin URI: https://designextreme.com/wordpress/
Contributors: designextreme
Donate link: https://paypal.me/designextreme
Tags: review, reviews, rating, google reviews, google business, google rating, google places, structured data
Requires at least: 4.6
Tested up to: 5.4
Stable tag: trunk
Requires PHP: 5.2.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Shortcode and widget for Google reviews and rating. Give customers a chance to leave their own rating/review; includes Structured Data for SEO.

== Description ==

Do you have a Google Business listing and would like to show your current customer reviews and rating within your website? 

This plugin will collect this data using your unique Google Place ID and display a well-formatted list or column/blocks of reviews, and some associated links to reviews and Google map listing, plus point customers to post their own review and rating on Google.

= People love this plugin: =

>   **[This Is The Best Google Business Reviews Plugin Out There](https://wordpress.org/support/topic/this-is-the-best-google-business-reviews-plugin-out-there/)**
I’ve used all the Google Business Reviews plugins out there and this is the best. … Love the presentation of the reviews. … The plugin author is VERY responsive. Answers all questions and quickly. 
[★★★★★](https:/wordpress.org/support/topic/this-is-the-best-google-business-reviews-plugin-out-there/) - [minks32578](https://wordpress.org/support/users/minks32578/), Jan 2020

>   **[Best Google review plugin and superb support](https://wordpress.org/support/topic/best-google-review-plugin-and-superb-support/)**
A stunning plugin. … Top class support. 
[★★★★★](https://wordpress.org/support/topic/best-google-review-plugin-and-superb-support/) - [KevinLycett](https://wordpress.org/support/users/kevinlycett/), Feb 2020

>   **[Excellent Plugin](https://wordpress.org/support/topic/excellent-plugin-5241/)**
Very impressed with the functionality of this plugin. Manual HTML import worked smooth and took less than a minute. … This is an amazing plugin. Looking forward to seeing what else this rockstar dev releases. 
[★★★★★](https://wordpress.org/support/topic/excellent-plugin-5241/) - [sterlingokura](https://wordpress.org/support/users/sterlingokura/), Nov 2019

= Features: =

*   **Shortcode and Widget** for customer reviews on Google
*   *Very* high level of customization with more [added on request](https://designextreme.com/wordpress/)
*   Insert a list of customers’ reviews with ratings range, review length range, offset, limit, sorting, language and individual review(s) selection
*   Fully responsive design with light styling to allow for your customizations; show/hide any element using shortcode parameters
*   Customize appearance with columns, switch of review text, hide or overwrite avatars, date formatting, name formatting, and much more
*   Designed with SVG vector graphics for a crisp appearance across all devices
*   40 designs/themes including:
	*   support for light/dark backgrounds,
	*   fonts similar to those used by Google,
	*   a badge theme with standard and small versions,
	*   responsive 2, 3 and 4 columns layouts for wider spaces,
	*   a center aligned version,
	*   a narrow version for smaller spaces,
	*   plus an option to remove styling entirely
*   Additional shortcodes for:
	*   Link to reviews and current rating on Google, with optional Google icon
	*   Link for customers to leave their rating and write a review on Google, with optional Google icon
	*   Link to the business place/location with Google Maps, with optional Google icon
	*   Display the current rating as a number
	*   Display the total number of reviews
*   Live preview in Dashboard→Settings
*   Select your choice icon to replace Google’s generic icons
*   **Structured Data** ([Schema.org](http://schema.org)) support to present clear business and review data to search engines to assist with SEO
*   **Demo mode** to help create your website before it goes live; without requiring Google API credentials
*   Manage all retrieved reviews and selectively hide reviews
*   See the latest formatted JSON data from Google’s API
*   Retrieves reviews in the background, collecting more through Google’s API over time with a snapshot of valid data for stability
*   Clear cache, reset retrieved reviews and overall reset to clear all plugin data
*   **Advanced** capability to import *all* review data from Google’s review popup HTML or consolidated reviews HTML (inspecting the live HTML)
*   A comprehensive and *free* plugin with no upgrades for additional functionality

= Requirement: =

*   A free [Google API Key](https://developers.google.com/maps/documentation/javascript/get-api-key) and a [Place ID](https://developers.google.com/places/place-id). Specific locations are supported; coverage areas are no longer offering data through the API.

= Recommendations: =

*   Please [set your business in Google](https://business.google.com) and find your Business’ [Place ID](https://developers.google.com/places/place-id) before using this plugin.
*   Create a [Google Billing Account](https://console.cloud.google.com/billing) to receive your *substantial and free* API Request allocation.
*   For peace of mind, please set [Google Places API Quotas](https://console.cloud.google.com/google/maps-apis/apis/places-backend.googleapis.com/quotas) to keep requests below the billable threshold. Recommended value for requests is 100 per day.

*This is my first public plugin, so [all comments](https://designextreme.com/wordpress/) are very welcome. I would also like to see your usage so I can introduce new themes.*

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/g-business-reviews-rating` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the ‘Plugins’ screen in WordPress
3. Use the **Settings**→**Reviews and Rating – Google Business** screen to configure the plugin with your Google API Key and the business’ Place ID
4. Once the Google Credentials are set, available shortcodes will appear to place in any page, post or use the widget


== Frequently Asked Questions ==

= How do I get a Google API Key? =

All the details for collecting your Google API Key can be found at: [Google API Key Guidelines](https://developers.google.com/maps/documentation/javascript/get-api-key).

Once your *Project* is set, you will need a new *API Key* with access to the **Places API**. As a restriction, set your host’s **IP Address** (not your website’s URL). Details of this value are listed in the Settings→Reviews and Rating page.

The Google API is required for this plugin to load the data from the Google API.

= How do I find my Place ID? =

You can location your unique *Place ID* using Google’s: [Place ID Finder](https://developers.google.com/places/place-id)

= I have more than 5 reviews, why can I only see 5 in this plugin? =

The Google API only offers a maximum of 5 relevant reviews at a time. Fortunately, this plugin will collect more reviews over time giving you more options to display your own selection of reviews from a larger pool. If you feel comfortable with the *HTML Inspector* in your browser, you can import all the reviews showing in the Google reviews popup.

= Why can’t I see any reviews on the website? =

Your first place to check is the *Retrieved Data* tab in Dashboard→Settings. If there is an error here, follow the advice offered by the Google API. If you can see some reviews listed, check for restrictions in your settings or shortcode that may limit the results. You can use the parameter: *errors=1* to report back potential issues in the front-end.

= I retrieved some reviews, but now an error message is asking for an “active billing account”. What can I do to see my reviews again? =

To use this plugin over time, you’ll need multiple requests to the Place API. Accounts without billing details have a tiny initial allocation. So, please [enable billing](https://console.cloud.google.com/project/_/billing/enable) to receive your substantial and free API request allocation.

= I don’t have any reviews yet, how can I develop my new website without any data to preview? =

There’s a demo mode that will populate some reviews for you and allow for testing prior to going live.

= When setting up the Google API Credentials, I cannot see Places API listed. Where is it? =

Some people don’t appear to have the Places API enabled in their account. Go to your [Places API page](https://console.cloud.google.com/apis/library/places-backend.googleapis.com?q=place) and click to Enable this API. 

= I can see my reviews in Google, but nothing is appearing in the plugin. The Google API and Place ID are valid. What is happening? =

Google does not send data for all places; only those currently found using the [Place ID Finder](https://developers.google.com/places/place-id). Some people who have service or coverage areas that aren’t a specific area may receive an error message: Not Found when attempting to retrieve data. This may occur after a period of time has passed. Unfortunately, there is nothing to remedy this issue for the time-being, other than to ensure your business uses a specific location as its Place ID.

== Screenshots ==

1. Example of the reviews listings with Light/Dark themes, multiple columns and various Badge themes
2. Dashboard view Google API, Place ID and general review display settings – Demo mode set
3. Shortcodes with some examples of the parameters
4. Details of the many shortcode parameters available to customise the display
5. Dashboard view of all retrieved reviews, with more added over time from Google
6. Dashboard view of current retrieved data using the Google API
7. Widget with extensive customization in the Dashboard
8. Dashboard view of advanced HTML import
9. Dashboard view of advanced import with 2 new reviews

== Changelog ==

= 3.9 =

* Improved localization and language support in Widget
* Improved positioning of rating number and stars
* Improved support of stars_gray parameter
* Fixed HTML entity star animation when rating number contains a comma character

= 3.8 =

* Structured Data now accepts a page ID value as an alternative to the front page
* Corrected synchronization time checks for each time interval
* Fixed shortcode display option to hide rating number

= 3.7 =

* Fixed JavaScript repeat method error in Internet Explorer 11 (Thanks to @compking)
* Improved timing of retrieval occurrences for 6 and 24 hour intervals
* Added language option for all reviews containing text
* Clarified Structured Data business types

= 3.6 =

* Significant improvements to review listing in Dashboard→Settings with sorting and language selection

= 3.5 =

* Significant improvements to HTML import (Thanks to @hacaro, @gonab and @thor_a)

= 3.4 =

* Improved retrieval of icon and logo image URLs
* Improved styling for small screens
* Structured Data price range data set to use only dollar symbol

= 3.3 =

* Fixed Structured Data appearances
* Fixed empty review limit to hide reviews (Thanks to @edlosee)

= 3.2 =

* Fixed display issue of reviews for processing HTML import

= 3.1 =

* Set more specific styling
* Set all external links’ rel parameter to nofollow
* Added 6 hour update interval for synchronization
* Added no-outline pre-defined class
* Added rel parameter to set this attribute for all links (Thanks to @zevs3000)
* Added background fill option to Widget

= 3.0 =

* Improvements to collection of retrieved data from Google
* Changed html_tags parameter to allow single character
* Extended HTML Import to accept alternative/consolidated review listings for accommodation such as hotels (Thanks to @achillesden)
* Extended summary parameter
* Improved icon and logo image selection script
* Improved Place ID interface when multiple places exists in archive
* Improved review_word parameter
* Added HTML classes as a new section in the Shortcodes tab
* Added language support for parameter descriptions
* Added tiny theme (Thanks to @humaniza)
* Added stripe and stripe contrast styling
* Added author switch layout
* Added rating parameter
* Added fill style to add a solid background color
* Added list of pre-defined HTML classes to Shortcode tab
* Added further information about places in Dashboard Reviews listing (for multiple places)

= 2.19 =

* Improvements to position of rating star animation elements
* Icon can be displayed without name in heading

= 2.18 =

* Added new centered theme

= 2.17 =

* Improving reliability of web server’s current IP address
* Removed empty heading when icon and name parameters are set to hide

= 2.16 =

* Improved stability for the storage of retrieved data and reviews
* Added new setting to strip emoticons from retrieved data
* Improved language support
* Improved visibility of animate HTML class when a specific script library exists

= 2.15 =

* Added a check for some instances when icon doesn’t exist in data archive
* Improved notice messages for submissions in Advanced tab in Settings

= 2.14 =

* Fixed unset variable error for retrieved data in some instances (Thanks to @joshdraha)

= 2.13 =

* Fixed error that sometimes occurred with empty retrieved data array
* Improvements to the CSS color logic for SVG fills

= 2.12 =

* Significant improvements to requests of Google Places API and storage of data
* Improved handling of other Places with storage of name, icon, vicinity, overall rating and review count 
* Improved stability of stars animation in JavaScript
* Improved number formatting to use localize formatting style
* Added color support for overall SVG rating stars with shortcode parameter or style sheet
* Added parameter to show/hide overall rating stars
* Added HTML entity version of rating stars
* Fixed empty review count warning (Thanks to @havin)
* Fixed missing value for Custom Styles textarea in Advanced tab

= 2.11 =

* Discovered a bug with a core WordPress function: maybe_serialize(). Added a work-around.
* Corrected HTML Import count

= 2.10 =

* Improved stability of HTML import with a fall-back on failure
* Restored message display issue when initiated from JavaScript
* Improved Google API Key and Place ID help text

= 2.9 =

* Improvements to notices in Dashboard→Settings, particularly with external plugin nagging
* Improved stability when retrieved data is no longer valid (Thanks to @philos1964)
* Improved log of retrieved data
* Improved sanity checks for Structured Data
* Changed maximum review display limit to exceed collected number of reviews
* Added help as a numbered list for setting the Google API with restrictions
* Corrected a theme display name
* Fixed JavaScript error when no style sheet is set (Thanks to @tomaszgasioritdesk)

= 2.8 =

* Added new narrow badge theme for narrow spaces to improve position of elements
* Added hide parameter for review count
* Improving the switch between demo and non-demo modes
* Improvements to styling and position of elements

= 2.7 =

* Added name format parameter (Thanks to Scott S.)
* Added overall link parameter (Thanks to @kodendigital and @hamudi)

= 2.6 =

* Fixed backwards compatibility for less recent WordPress versions for wp_date() function (Thanks to @Carret and @joshdraha)

= 2.5 =

* Fixed JavaScript Ajax call (Thanks to @gradlon)

= 2.4 =

* Improvement to JavaScript and style sheet loading
* Fixed activation error

= 2.3 =

* Added custom style sheet
* Added included and excluded word filter for review text

= 2.2 =

* Added responsive multi-column support for review listings
* Improved theme interface in Dashboard→Settings
* Added a live preview for smaller screens
* Improved theme selection dropdown
* Added justified reviews text when matching class specified as a parameter
* Switched default heading from H3 back to H2 (correction from 2.1)

= 2.1 =

* Added a parameter to overwrite the HTML element tags

= 2.0 =

* Added Structured Data (schema.org) with supporting functionality
* Added a live preview of shortcode output in Dashboard→Settings
* Added icon and logo image selection from Media Library
* Switching HTML-only rating stars to SVG vector-images to offer a more consistent experience
* Added support for uploading SVG images
* Added review translation option for HTML import
* Reset now available for reviews only
* Improved language support
* Improved tab navigation in Dashboard
* Improved behavior of hide/show reviews in Widget

= 1.32 =

* Improved number parse for imported rating numbers
* Added a js-links fall-back to circumvent conflicts with event tracking of links starting with a hash
* Improved consistency of review excerpt trimming
* Added shortcode examples of Google icon to links/buttons

= 1.31 =

* Restored no excerpt when non-numeric (or < 20) value is set as a parameter
* Added review/reviews parameter description in Dashboard→Settings list

= 1.30 =

* Fixed empty shortcode attribute error (Thanks to @markima75)
* Improved styling in Advanced tab in Dashboard→Settings for some screen sizes

= 1.29 =

* Added a shortcode parameter to override the review/reviews word in the summary (Thanks to @sebastienrenaudeau)
* Improved logic for review limits so Dashboard→Settings value is a true fall-back
* Improved language support in Dashboard and for review/reviews word

= 1.28 =

* Improved language filtering in shortcode (Thanks to @niseadel)
* Added language filtering in widget
* Improved Badge theme styling - star alignment and spacing

= 1.27 =

* Fixed PHP tag closure shortening in Settings template file (Thanks to @indekssolutions)
* Added inline style for review meta (author name, rating, date)
* Added date formatting support to override relative time

= 1.26 =

* Fixed bug for minimum rating when set to 5 in shortcode

= 1.25 =

* Added translatable relative time words (Thanks to @chris-kns)
* Added option to hide or override business name (Thanks to @chris-kns)

= 1.24 =

* Added random shuffle for sorting reviews
* Added functionality to clear cache and retrieve current Google data
* Improved Widget customization in Dashboard
* Added new attribution parameter to force light or dark background version

= 1.23 =

* Change to checking of cron task (Thanks to @designermark)

= 1.22 =

* Checking for existence of language review text array value

= 1.21 =

* Fixed two Safari issues: SVG images not appearing and main rating star width is now wider (Thanks to @sterlingokura and @nouvellessubstances)
* Fixed specific review ID listing bug (Thanks to @sterlingokura)

= 1.20 =

* Change to setting cache to help show reviews after initial setup
* Added a parameter to show/hide errors and warnings in the shortcode

= 1.19 =

* Changed review ordering for IDs
* Fixed bug with empty attributes (Thanks to @marameodesign)
* Added a numeric limit check in review filter

= 1.18 =

* Added new themes to Widget
* Added plugin reset functionality
* Added review sorting for shortcode and widget
* Set Advanced HTML import to pre-select new reviews

= 1.17 =

* Improved Google API Key error notice (Thanks to @minks32578)
* Improved tab navigation, with last active section visible upon return
* Added none/some/all reviews to assist with setting the review limit

= 1.16 =

* Added a comprehensive list of shortcode parameters
* Fixed theme shortcode parameter
* Added language filter
* Added a checklist for the advanced section (Thanks to @minks32578)
* Minor fixes, usability and design alterations

= 1.15 =

* Added two new themes for a more compact Badge appearance
* Allowing a zero review limit to intentionally hide all reviews
* Added new shortcode parameters to handle layout
* Improvements to styling

= 1.14 =

* Checking for existence of array keys in early Google review data
* Fixed regular expression for customized icon string
* Removed button class attribute when parameter is set

= 1.13 =

* Fixed error in Google write review and view reviews link class attribute

= 1.12 =

* Fixed JavaScript context error in handling the HTML import

= 1.11 =

* Improvements to navigation menu in Dashboard
* Refreshing relative times from retrieved data

= 1.10 =

* Minor design and functionality changes
* Added a missing shortcode attribute (Thanks to @conceptio)

= 1.9 =

* Advanced - Improved stability of HTML Import functionality
* Changes to design

= 1.8 =

* Advanced - Added import functionality from the HTML in Google Reviews popup
* Changed default sort order to remain more constant over time
* Other minor improvements to design and functionality

= 1.7 =

* Updated definition of dummy data for Demo Mode

= 1.6 =

* Added set of all data prior to displaying Dashboard→Settings

= 1.5 =

* Added a refresh of data upon plugin upgrade

= 1.4 =

* Improved shortcode customization
* Improved the switch between modes
* Added widget with live preview support

= 1.3 =

* Added show/hide review functionality

= 1.2 =

* Fixed a style issue in Dashboard→Settings

= 1.1 =

* Added Demo mode
* Extended review listing functionality

= 1.0 =

* Initial version

== Upgrade Notice ==

 

== Getting started with Google API ==

In order to run this plugin, you will need a Google API Key and to locate your Place ID

* [Google API Key Guidelines](https://developers.google.com/maps/documentation/javascript/get-api-key)
* [Place ID Finder](https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder)
