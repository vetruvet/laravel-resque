### 1.2.2
- Obey database number specified in Laravel's Redis configuration.

### 1.2.1
- Reverted PHP requirement to 5.4.

### 1.2.0

- Feature: pushIfNotExists() added.
- Changed: PHP 5.5.x required.

### 1.1.2

- Fixed dependency error.
- Updated README documentation.
- Bumped PHP requirement to 5.4.

### 1.1.1

- No longer requiring chrisboulton/php-resque-scheduler, rather suggesting it.
- Added the resque:listen Artisan command.

### 1.1.0

- Laravel 4.1 support.

### 1.0.7

- Fixed casing bug in ResqueQueue.

### 1.0.6

- Fixed getStats()
- Added isWaiting()
- Added isRunning()
- Added isFailed()
- Added isComplete()

### 1.0.5

- Removed extra dependancy, php-resque-scheduler also includes it

### 1.0.4

- Implemented the use of Config

### 1.0.3

- Fixed namespacing bug

### 1.0.2

- Added missing static keyword
- Fixed invalid comma location

### 1.0.1

- Fixed namespacing bug
- Variable typos fixed

### 1.0

- Initial Release
