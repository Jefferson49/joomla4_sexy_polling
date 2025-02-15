[![Latest Release](https://img.shields.io/github/v/release/Jefferson49/Joomla_plugin_sexypolling_reloaded?display_name=tag)](https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded/releases/latest)
[![Joomla major version](https://img.shields.io/badge/joomla-v5.x-green)](https://downloads.joomla.org/cms/joomla4)
[![Joomla major version](https://img.shields.io/badge/joomla-v4.x-green)](https://downloads.joomla.org/cms/joomla4)
## Sexy Polling Reloaded
+ A [Joomla](https://www.joomla.org/) extension for polling with single/multiple voting, adding answers by users, start/end dates, voting periods, and extensive template customizing.
+ "Sexy Polling Reloaded" is a fork of the "Sexy Polling" extension (version 2.1.7), which was developed by 2GLux.com and provided on the former website [2GLux.com](https://web.archive.org/web/20211215150923/https://2glux.com/projects/sexypolling).
+ The fork intends to make the functionality of the former "Sexy Polling" extension available for Joomla 4 and 5, because the original extension is not provided and supported any more.
+ A patch was added to fix a reported [security issue](https://www.exploit-db.com/exploits/50927).
+ Some limitations of the former FREE version were removed.
+ Support for the Joomla update system was added to check and install new releases of the extension
+ **The code was migrated to the Joomla 4.x/5.x CMS and module API, while still keeping it usable for Joomla 3.10**.
+ Further functionality and user interface improvements were added.
+ Sexy Polling Reloaded is published in the [Joomla! Extensions Directory](https://extensions.joomla.org/).
+ The latest release can be used with Joomla 5.x, 4.x and Joomla 3.10.

## Features
A list of the features can be found in the description of the [Sexy Polling Reloaded extension](https://extensions.joomla.org/extension/sexy-polling-reloaded/) Joomla! Extensions Directory.

##  Installation
+ Manual installation
    + Go to the [release page](https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded/releases) and download the latest release
    + Install the ZIP package in the Joomla administration backend
+ Joomla update system
    + Prerequesite: first installation has to be installed manually, see above
    + Joomla will automatically check for updates in the administration backend
    + If an update is available, change to the Extensions / Update menu and install the update 
+ **PHP extension intl required**
   + The extension requires the PHP exension "intl" (Internationalization). Usually, the "intl" extension is included in the PHP installation. However, it might be necessary to activate it, i.e. the php.ini file must contain the following line: extension=intl
   + If the "intl" extension is not installed, PHP errors like "Class IntlTimeZone not found", or "Attempted to load class IntlTimeZone from the global namespace" might occur.
+ **Migration from the former "Sexy Polling" extension**
    + During installation, the extension re-uses existing data from the former Sexy Polling extension. 
    + If you want to reuse data from the former Sexy Polling extension, do not uninstall the former Sexy Polling extension. Instead, just install the Sexy Polling Reloaded extension. It will re-use the existing database tables.
+ **Known issues**
    + **Security: Due to improvements in the component architecture of release v5.0.0, it is highly recommended to upgrade from earlier 4.x.x versions to 5.x.x**.
    + Installation errors with **v4.1.x** extension versions, failing with an "**... column 'country' can't have a default value**" error, are avoided if installing a extension release **v5.0.0** or later.
    + If using PHP 8.2, certain deprecation messages might be shown in the frontend, see issues [#58](https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded/issues/58) and [#61](https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded/issues/61). The root cause for these warnings lies in the Joomla platform and will hopefully be solved in one of the next Joomla releases.
##  Date formats
The date format, which is shown in poll modules, can be specified in the Joomla administration at: Components -> Sexy Polling Reloaded -> Polls -> Edit -> Date Format.

Examples for the date format: 
+ d/m/Y (22-11-2022)
+ m/d/Y (11-22-2012)
+ M d, Y (Nov 22, 2022)
+ F d, Y (November 22, 2022)

For more details about the format options, [see PHP documentation about date time format](https://www.php.net/manual/en/datetime.format.php).

## Versions 
+ The latest extension version was developed and tested with: 
    + [Joomla 3.10.11](https://downloads.joomla.org/cms/joomla3), [Joomla 4.2.6](https://downloads.joomla.org/cms/joomla4), and [Joomla 5.1.4](https://downloads.joomla.org/cms/joomla5); but should also run with other Joomla 3.10, 4.x, or 5.x versions. Other 3.x versions have not been tested, but might also be feasible.
    + PHP 8.0.23 as well as PHP 8.1.13; but should also run with other PHP 8 versions. 7.x versions have not been testetd, but might also be feasible.

## Translation
You can help to translate this module:
+ User frontend translations: [/com_sexypolling/site/language](com_sexypolling/site/language/)
+ Administrator backtend translations: [/com_sexypolling/admin/language](com_sexypolling/admin/language/)

You can use a text editor like notepad++ to work on translations.

You can contribute translations via a pull request (if you know how to do), or by opening a new Github issue and attaching the file. Updated translations will be included in the next release of this module.

Currently, the following frontend languages are available:
+ Dutch
+ English
+ Farsi
+ French
+ German
+ Greek
+ Italian
+ Russian
+ Slovenian
+ Spanish
+ Turkish

## Issue reporting
If you experience any bugs [create a new issue](https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded/issues) in the Github repository

## License
+ [GNU General Public License, Version 3](LICENSE.md)
+ Joomla
    + Copyright (c) 2005-2025 [Open Source Matters, Inc.](https://www.opensourcematters.org/)
+ Sexy Polling (Joomla extension)
    + Copyright (c) 2010 - 2021 [2GLux.com](2GLux.com). All rights reserved.
+ Sexy Polling Reloaded (Joomla extension)
    + Copyright (c) 2025 [Jefferson49](https://github.com/Jefferson49)

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see https://www.gnu.org/licenses/.

## Development and Contributions
+ The extension was developed by [2GLux.com](2GLux.com) for Joomla 2.5 and 3 with the original extension name "Sexy Polling".
+ After the "Sexy Polling" extension was removed from the web and the support was not continued, a fork of the extension was migrated to Joomla 4 with the new extension name "Sexy Polling Reloaded" by [Jefferson49](https://github.com/Jefferson49)
+ Further contributions on [Github](https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded) are welcome!

##  Github repository  
https://github.com/Jefferson49/Joomla_plugin_sexypolling_reloaded
