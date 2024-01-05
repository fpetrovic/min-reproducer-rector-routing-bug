# Symfony Project

This is a minimum reproducer for symfony 6.4 and rector 0.18.13 yaml routing to php attribute/annotation routing conversion.
## Prerequisites

Before you begin, ensure you have met the following requirements:
* You have installed PHP 8.1 or later.
* You have installed Composer.
* Note: Symfony built in server is installed.

## Installation

To install the Symfony project, follow these steps:

1. **Instalation steps:**
   ```bash
   git clone git@github.com:fpetrovic/min-reproducer-rector-routing-bug.git
   cd {installed_dir}
   composer install
   symfony server:start
    ```
   
# Bug Description:

- execute `./vendor/bin/rector process src --clear-cache --dry-run --debug` OR
`./vendor/bin/rector process src --clear-cache`

**Actual:**

Nothing is happening. No conversion is done.

**Expected:**

Conversion from yaml routing to php attribute/annotation routing should be done.

