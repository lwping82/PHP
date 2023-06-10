# Note
Composer is a dependency management tool in PHP.

# How to implement Composer?
1. Install Composer into your environment.

2. Create Composer.json file in your project.

3. Run the following command to pull files from Packagist.

> php C:\composer\composer.phar update

4. All downloaded dependency files will be placed under "vendor" folder.

5. Once Composer "update" has been executed successfully. "composer.lock" shall be created.

6. Commit "composer.lock" to the repository to ensure from now onwards, everyone downloading the project will now use the same version of the dependencies.

7. When "composer.lock" is present, use "install" command the next time you would like to download the dependencies.

> php C:\composer\composer.phar install

