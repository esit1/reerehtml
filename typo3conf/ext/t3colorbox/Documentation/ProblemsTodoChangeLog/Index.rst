﻿

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)



Known Problems - To-Do list - Changelog
-----------------------------------------


Known Problems
^^^^^^^^^^^^^^^

- nothing

To-Do list
^^^^^^^^^^^

- send me your design by e-mail (d.wohlrabe@quadronet.de), i will integrate this in the extension




Change Log
^^^^^^^^^^^

========  ====================================================================================
Version   Changes
========  ====================================================================================
2.0.0     Initial upload. Colorbox 1.4.1 and 1.3.34
2.0.1     Cosmetical fixes: manual & icon
2.0.2     New manual
2.1.0     Cycling through all images on a page through constants setting
          Added slideshow "autostart" and "speed" in constants
          Reworked "Using own labels"
2.1.1     Colorbox Version 1.4.4
2.1.2     Colorbox Version 1.4.7
2.2.0     Tested with TYPO3 6.1 and raised to "stable"
          Colorbox Version 1.4.15
2.2.2     Colorbox Version 1.4.26
2.3.0     improved typoscript
          Colorbox Version 1.4.33
2.3.1     Colorbox Version 1.4.37
          fixed compatibility with IE8
		  (credits go to Stefan Weißwange from TSA -Teleport GmbH)
2.4.0     Colorbox Version 1.5.6
          switched to jQuery 2.1.0 (you can replace that with your own jQuery version)
2.4.1     Switched standard-script back to colorbox 1.4.37
          due to problems with the navigation
3.0.0     .) reworked t3colorbox: changed "style" to "theme"
          .) dropped compatibility with TYPO3 prior to 6.2 (but most likely it works)
		  .) Colorbox Version 1.5.13 - 2014/8/4 detailed changes: https://github.com/jackmoore/colorbox#changelog
		  .) switched Back to jquery 1.11.1 - 2014/5/1 (jQuery 2.x has the same API as jQuery 1.x, but does not support Internet Explorer 6, 7, or 8)
		  .) dropped constant "fixed total width" - you can set this in the "Colorbox command" (see reference colorbox)
		  .) dropped t3colorbox initialWidth setting - set in colorbox script
		  .) added a new theme (t3colorbox) as theme6: font-icons (FontAwesome http://fortawesome.github.io/Font-Awesome/ ) instead of images, included less file (based & modified for Bootstrap3 / styling is limited as some html parts (class names) are generated in colobox.js)
3.6.0     Lightbox for TYPO3 Version 7.6, with 7 css-styles. You can set it over constanst-editor. Supports TYPO3 version 7.6.0 - 7.6.99
3.6.1     Lightbox for TYPO3 Version 7.6, with 7 css-styles. You can set it over constanst-editor. Update documentation
3.6.2     Fixing CSS-Bugs, only one JS - jquery.colorbox-1.5.13.min.js
3.6.3     New colorbox - lightbox 1.6.4, comes with 10 css-styles. Select your favorite design over constants-editor.
3.6.4     Update the documentation, cosmetical fixes in css-style theme 7
========  ====================================================================================



