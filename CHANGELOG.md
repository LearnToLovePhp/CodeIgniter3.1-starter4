# Changelog

All notable changes to this project will be documented in this file.


## [Unreleased]

## [0.1.3] - 2018-04-08
### Changed
- fixed default role when user first visits page, now always shows guest unless selected otherwise
- updated, on-topic readme

## [0.1.2] - 2018-04-08
### Added
- edit page - edits existing set
            - modifies row
                 
## [0.1.1] - 2018-04-08
### Changed
- customize page - save data
                 - adds new row (edit will be seperate)

## [0.1.0] - 2018-04-06
### Added
- entity models for accessory and pizza

## [0.0.9] - 2018-04-06
### Added
- customize page - page only accessable as user, admin
                 - select items based on category
                 - image updates immediately
                 
## [0.0.8] - 2018-03-29
### Added
- user roles - added roles as constants
             - added dropdown of user roles to nav bar
             - Updated css for drop down menu
             - saved user role in session

## [0.0.7] - 2018-02-12
- set - incomplete implementation of Set controller
      - incomplete implementation of equipment_set view
      - modified pizzas.csv to remove erroneous spacing

## [0.0.6] - 2018-02-11
### Changed
- catalog - implemented catalog controller
          - implemented view to list all ingredients by category
          - modified ingredients.csv to remove erroneous spacing
          - modified image path in ingredients.csv

## [0.0.5] - 2018-02-11
### Added
- Base catalog view 
- Catalog controller

### Changed
- routes - added separate route for catalog page
- config - catalog goes to own page now

## [0.0.4] - 2018-02-10
### Added
- Added csv 'database' files to /data, with corresponding models in application/models/
### Changed
- Modified image filenames and file extensions

## [0.0.3] - 2018-02-09
### Added
- Added image files to /public/img/

## [0.0.2] - 2018-02-08
### Added
- equipment set view
- equipment set controller
- menu
### Changed
- My_Controller - loads the menu
- config - Adds the menu items
- routes - Set home page to equipment_sets
- template - added the menu as a navbar


## [0.0.1] - 2018-02-08
### Added
- Changelog file




