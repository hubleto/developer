# User management and authentication

About Hubleto's default authentication provider

By default, Hubleto project uses `\HubletoMain\Auth` class to provide user authentication. When accessing any resource via some URL (route or endpoint), Hubleto first checks whether user must be authenticated in order to access this resource. If yes, the authentication class checks for the authenticated user. If no user is authenticated, Hubleto automatically renders sign-in screen and after login redirects to the originally requested resource.

## User model

This default authentication provider uses `\HubletoApp\Community\Settings\Models\User` model to store information about users. The implementation of this model is in https://github.com/hubleto/main/blob/main/apps/community/Settings/Models/User.php.

## Customizations

If you want to change the authentication behavious for your project, you can implement your own `HubletoMain->createAuthProvider()` method in `src/Main.php`. Default implementation of this method is in https://github.com/wai-blue/adios/blob/main/src/Core/Loader.php.

If you want to change the design of the sign-in screen, simply modify `src/Views/SignIn.twig` view (https://github.com/hubleto/main/blob/main/src/views/SignIn.twig).