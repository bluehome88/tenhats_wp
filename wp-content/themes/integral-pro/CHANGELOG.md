### 1.5.5 - August 26th, 2021

**Changes:**

- Tested with WordPress 5.8


### 1.5.4 - May 21st, 2021

**Changes:**

- Tested with WordPress 5.7.2
- Bundled Master Slider plugin


### 1.5.3 - December 16th, 2020

**Changes:**

- Tested with WordPress 5.6


### 1.5.2.2 - September 14th, 2020

**Changes:**

- Tested with WordPress 5.5.1


### 1.5.2.1 - August 12th, 2020

**Changes:**

- Tested with WordPress 5.5


### 1.5.2 - July 7th, 2020

**Changes:**

- Tested with WordPress 5.4.2
- Added setting for website/external URL in Team Member widget


### 1.5.1 - May 24th, 2020

**Changes:**

- Added setting for background color of Brands section


### 1.5.0 - March 31st, 2020

**Changes:**

- Tested with WordPress 5.4
- Added Instagram feed section
- Added ability to add widgets to Extra 1 and Extra 2 sections
- Added ability to set title for Features section
- Added setting to remove horizontal lines from H2 Big Titles
- Added 2 new sidebar positions for Extra 1 and 2 sections
- Added Continue Reading link to post excerpt
- Added Schema attribute to navigation


### 1.4.9 - Feb 11th, 2020

**Changes:**

- Tested with Redux Framework v3.6.17
- Tested with Contact Form 7 v5.1.6
- Tested with Theme Check plugin and PHP 7.0
- Upgraded to FontAwesome 5 with version 4 shim
- Tested with WordPress v5.3.2


### 1.4.8 - Nov 13th, 2019

**Changes:**

- Tested with WordPress 5.3


### 1.4.7.2 - Oct 7th, 2019

Changes:

- Edited styles for content lists in style.css
- Removed filters from args array in blog.php
- Cleaned up spacing and page names in several files
- Tested with WordPress 5.2.3


### 1.4.7.1 - Apr 12th, 2019

Changes:

- Removed extra </a> tag in post meta section for comments in index.php, single.php, category.php and archive.php


### 1.4.7 - Dec 18th, 2018

Changes:

- Tested with WordPress 5.0
- Tested with Block Unit Test Plugin for Gutenburg
- Added missing escaped strings in /sections/ files
- Fixed deprecated function in widget files
- Added translation strings to theme-updater-admin.php
- Updated languages integral.pot file


### 1.4.6.1 - June 22nd, 2018

Changes:

- Added event change trigger to /js/admin.js


### 1.4.5 - 10/11/2017

Changes:

- Added link to Optimal Pro child theme in child-themes.php
- Fixed spelling in options.php
- Added options for Pinterest URL in options.php
- Added Pinterest icon in team member widget and contact section
- Fixed team member image styles
- Fixed styles for images alignment


### 1.4.4 - 9/27/2017

Changes:

- Edited line 26 of category.php (removed 2nd %s)
- Changed get_template_directory to get_stylesheet_directory in options.php (so child theme can override defaults)
- Added notice dismiss button in theme welcome page


### 1.4.3.1 - 8/17/2017

Changes:

- Fixed issue with our team widget, member images had lost the zoom feature
- Added notice.css file for theme notice
- Edited the style.css file


### 1.4.3 - 7/6/2017

Changes:

- Added link field to project grid widgets
- Added link target field to project grid widgets
- Updated styles for contact form submit button


### 1.4.2 - 7/1/2017

Changes:

- Added additional tabs in theme welcome
- Changed design of theme notice
- Tested compatibility with WordPress 4.8
- Add Bootstrap img-responsive to all content images
- Ran NS Theme Check plugin and fixed errors
- Fixed escaping issues in widgets
- Fixed sanitization issues in widgets


### 1.4.1 - 6/19/2017

Changes:

- Added link field to Client and Brand widgets
- Edited style.css to fix margin issue for widgets
- Removed search form config in widgets.php to be controlled by searchform.php
- Fixed missing prefixing
- Fixed escaping issues
- Fixed sanitization issues
- Applied other misc. changes mentioned in https://themes.trac.wordpress.org/ticket/41732#comment:14
- Fixed issue with contact form width
- Changed navbar to be position relative instead if fixed on mobile devices
- Fixed margin issue for widgets in sidebar
- Fixed scroll reveal overflow issue on mobile devices


### 1.4.0 - 5/24/2017

Changes:

- Added link field to Client and Brand widgets


### 1.3.3 - 4/03/2017

Changes:

- Updated FontAwesome from 4.6.3 to 4.7.0
- Added searchform.php


### 1.3.2 - 3/09/2017

Changes:

- Replaced jQuery UI script with jQuery Effects Core bundled with WordPress (edited enqueue.php)
- Added top margin classes to style.css
- Added margin to 2nd content section on services.php
- Added 2 extra content sections
- Added settings for the 2 extra content sections in options.php
- Added pricing features to the pricing tables widget
- Fixed issue with button on pricing tables showing if no link was entered
- Fixed width issue with Master Slider in Welcome section (edited style.css)
- Changed default values in options.php for Hero titles


### 1.3.1 - 2/05/2017

Changes:

- Fixed Integral Options btn issue in theme welcome page
- Fixed spelling mistake in /inc/options.php
- Added code to use full-width page if no sidebar
- Added feature to set padding for each section in /inc/options.php


### 1.3.0 - 1/17/2017

Changes:

- Added French language translation files (fr_CA, fr_FR, fr_BE)
- Changed font sizes from px to rem in style.css


### 1.2.9 - 11/1/2016

Changes:

- Updated FontAwesome from version 4.3 to 4.6.3
- Added styles for .btn-inverse
- Updated main button color in options.php
- Added support for WPML plugin (wpml-config.xml)
- Added Scroll Reveal animation
- Updated /inc/options.php (added animations tab with settings)
- Updated team members widget text
- Updated footer.php
- Updated /sections/skills.php
- Fixed error in testimonials widget file on line 47


### 1.2.8 - 10/12/2016

Changes:

- Added support for license keys and remote updating
- Fixed issue with sticky navbar toggle
- Reduced parallax scroll speed


### 1.2.7 - 10/11/2016

Changes:

- Updated style.css (Updated the styles for the buttons, changed .content h2 to .content .entry-title)
- Added .entry-title class to all content h2 tags
- Updated the get_sidebar function on all pages which displayed it
- Updated the wp_nav_menu function in header.php
- Added support for Theme Demo Import plugin
- Added Theme Demo Import plugin in TGMPA
- Added demo content files
- Fixed issue with primary button border colors
- Updated contact form field widths


### 1.2.6 - 09/26/2016

Changes:

- Fixed issue with homepage post thumbnails in /sections/blog.php
- Updated the admin notice on theme installation
- Updated button classes and styles
- Updated style.css


### 1.2.5 - 09/10/2016

Changes:

- Added default header for homepage when One-page Layout is not configured
- Added ability to toggle buttons on the default homepage header
- Added customizer.php for settings for the default homepage header
- Added seperate files for functions in /inc/
- Added setting to toggle header and footer
- Added img-responsive class to logo image
- Added styles to limit width of logo on mobile devices
- Added Youtube icon to contact section
- Updated hero.php
- Updated styles.css
- Updated functions.php
- Updated footer.php
- Updated archive.php
- Updated single projects widget to not display grey description section when no data is entered
- Updated the contact section file and added custom class for margin
- Fixed big and small title size on mobile devices
- Fixed spelling errors in theme description and theme welcome
- Fixed smooth scroll effect
- Fixed issue with text alignment in master slider content section
- Fixed issue with content appearing in contact section when none was selected


### 1.2.4 - 08/17/2016

Changes:

- Added an offset in smooth-scroll.js
- Updated theme screenshot
- Removed top menu underline classes in options.php
- Removed css related to top menu underline in style.css


### 1.2.3 - 08/10/2016

Changes:

- Added image upload to testimonials widget (to display authors profile picture)
- Updated the theme welcome page
- Fixed missing translations
- Fixed incorrect file path functions
- Satinized URLs not esc in the code
- Fixed missing prefixed functions and image size names
- Updated rtl file
- Updated language file


### 1.2.2 - 08/01/2016

Changes:

- Fixed issue with Single Projects widget add/edit gallery upload
- Fixed the comment reply enqueue script for the comment function in functions.php
- Removed unneccessary jQuery script
- Updated the smooth scroll script
- Updated theme description and tags
- Changed px for % for section padding control in welcome section
- Edited the /js/admin.js file to fix issue with image upload in several widgets


### 1.2.1 - 07/01/2016

Changes:

- Added support for 3 levels of sub-menu's in style.css and header.php
- Moved TGM Plugin Activation and Bootstrap Nav Walker files to /inc directory
- Removed title tag code from header.php
- Removed duplicate functions in functions.php
- Moved several theme_support declarations into the theme_setup function in functions.php
- Removed unused functions in functions.php
- Removed comment reply script enqueue from header.php
- Added support for Custom Logo function in header.php
- Added support for the site tagline (description) in header.php
- Removed logo.png file from /images directory
- Fixed issue with the Create Gallery btn in single project widget file
- Added styles to style.css
- Updated the screenshot
- Added default values for color fields in options.php
- Added default value for contact text field (select page)
- Added Linkedin field (link and icon) for team members
- Added Instagram field (link and icon) for team members
- Added Instagram field (link and icon) in contact section
- Fixed notices in widget files (notice undefined index and notice undefined variable)
- Fixed issue with inability to change btn text in Call-to-Action 2 section
- Added the comment reply enqueue script for the comment function in functions.php


### 1.2.0 - 06/01/2016

Changes:

- Added padding option in options.php for following sections: welcome, testimonial, call-to-action and newsletter.
- Fixed spelling errors in options.php
- Fixed double text domain issue in single.php
- Changed theme description in style.css
- Changed theme tags in style.css
- Updated theme-welcome.php file
- Added rss feed meta box in WP dashboard to display Themely latest news (functions.php)
- Fixed php error with function prefix in functions.php
- Added Linkedin icon in contact section
- Changed parallax effect speed in /sections/custom.php
- Added default background images for testimonial, CTA and newsletter sections
- Updated theme screenshot
- Added social sharing icon section on posts page (single.php)
- Added Author section on posts page (single.php)
- Updated style.css with new styles
- Fixed bug with inability to change dark section big title color.
- Added ability to change BG of stats section in options.php
- Added ability to change font styles of stats section in options.php
- Added ability to set the Master Slider as background of Welcome section (updated options.php file, added /inc/masterslider.php file, edited /sections/hero.php file, edited styles.css file)


### 1.1.0 - 04/19/2016

Changes:

- Updated logo
- Added image pattern overlay on BG images
- Changed style.css file with misc. tweaks
- Added toggle to disable pattern overlay and dark layer over BG images
- Changed CSS and markup of Features widgets
- Added homepage featured posts section
- Updated functions.php file with post excerpt length and post image thumbnail settings
- Updated theme welcome page
- Updated language files (.pot, .po and .mo)
- Updated category.php, archives.php and index.php files (added links for post images)
- Updated options.php file with additional customizer options
- Added brands section
- Added 2nd call to action section
- Added latest tweets section
- Fixed bug in contact section (unable to change social icon links)


### 1.0.0 - 27/01/2016

Changes:
 
*INITIAL RELEASE*
