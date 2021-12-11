+--------+-----------+-------------------------------------------+---------------------+-----------------------------------------------------------------------------------+--------------+
| Domain | Method    | URI                                       | Name                | Action                                                                            | Middleware   |
+--------+-----------+-------------------------------------------+---------------------+-----------------------------------------------------------------------------------+--------------+
|        | GET|HEAD  | /                                         |                     | App\Http\Controllers\PagesController@show                                         | web          |
|        | POST      | activities                                | activities.store    | App\Http\Controllers\ActivitiesController@store                                   | api          |
|        | GET|HEAD  | activities                                |                     | App\Http\Controllers\ActivitiesController@webIndex                                | web          |
|        | GET|HEAD  | activities/limit                          |                     | App\Http\Controllers\ActivitiesController@limit                                   | api          |
|        | GET|HEAD  | activities/limit/{limit}                  |                     | App\Http\Controllers\ActivitiesController@limit_specified                         | api          |
|        | GET|HEAD  | activities/user/{user}/limit              |                     | App\Http\Controllers\ActivitiesController@user_limit                              | api          |
|        | GET|HEAD  | activities/user/{user}/limit/{limit}      |                     | App\Http\Controllers\ActivitiesController@user_limit_specified                    | api          |
|        | DELETE    | activities/{activity}                     | activities.destroy  | App\Http\Controllers\ActivitiesController@destroy                                 | api          |
|        | PUT|PATCH | activities/{activity}                     | activities.update   | App\Http\Controllers\ActivitiesController@update                                  | api          |
|        | GET|HEAD  | activities/{activity}                     | activities.show     | App\Http\Controllers\ActivitiesController@show                                    | api          |
|        | GET|HEAD  | activity/{activity}                       |                     | App\Http\Controllers\ActivitiesController@webShow                                 | web          |
|        | GET|HEAD  | admin                                     |                     | App\Http\Controllers\DashboardController@admin                                    | web,auth     |
|        | POST      | alerts                                    | alerts.store        | App\Http\Controllers\AlertsController@store                                       | api          |
|        | PUT       | alerts                                    |                     | App\Http\Controllers\AlertsController@store                                       | api          |
|        | GET|HEAD  | alerts                                    | alerts.index        | App\Http\Controllers\AlertsController@index                                       | api          |
|        | PATCH     | alerts                                    |                     | App\Http\Controllers\AlertsController@update                                      | api          |
|        | PUT|PATCH | alerts/{alert}                            | alerts.update       | App\Http\Controllers\AlertsController@update                                      | api          |
|        | GET|HEAD  | alerts/{alert}                            | alerts.show         | App\Http\Controllers\AlertsController@show                                        | api          |
|        | DELETE    | alerts/{alert}                            | alerts.destroy      | App\Http\Controllers\AlertsController@destroy                                     | api          |
|        | POST      | analytics                                 | analytics.store     | App\Http\Controllers\AnalyticsController@store                                    | api          |
|        | PUT       | analytics                                 |                     | App\Http\Controllers\AnalyticsController@store                                    | api          |
|        | GET|HEAD  | analytics                                 | analytics.index     | App\Http\Controllers\AnalyticsController@index                                    | api          |
|        | PUT|PATCH | analytics/{analytic}                      | analytics.update    | App\Http\Controllers\AnalyticsController@update                                   | api          |
|        | GET|HEAD  | analytics/{analytic}                      | analytics.show      | App\Http\Controllers\AnalyticsController@show                                     | api          |
|        | DELETE    | analytics/{analytic}                      | analytics.destroy   | App\Http\Controllers\AnalyticsController@destroy                                  | api          |
|        | GET|HEAD  | app/{app}/users                           |                     | App\Http\Controllers\AppsController@users                                         | api          |
|        | GET|HEAD  | apps                                      | apps.index          | App\Http\Controllers\AppsController@index                                         | api          |
|        | POST      | apps                                      | apps.store          | App\Http\Controllers\AppsController@store                                         | api          |
|        | DELETE    | apps/{app}                                | apps.destroy        | App\Http\Controllers\AppsController@destroy                                       | api          |
|        | PUT|PATCH | apps/{app}                                | apps.update         | App\Http\Controllers\AppsController@update                                        | api          |
|        | GET|HEAD  | apps/{app}                                | apps.show           | App\Http\Controllers\AppsController@show                                          | api          |
|        | GET|HEAD  | callback                                  |                     | App\Http\Controllers\FitbitController@redirect                                    | web          |
|        | GET|HEAD  | caregiver/{caregiver}                     |                     | App\Http\Controllers\CaregiversController@show                                    | web,auth     |
|        | GET|HEAD  | caregivers                                |                     | App\Http\Controllers\CaregiversController@index                                   | web,auth     |
|        | GET|HEAD  | caregivers/added                          |                     | Closure                                                                           | web          |
|        | GET|HEAD  | caregivers/delete/{caregiver}             |                     | App\Http\Controllers\CaregiversController@destroy                                 | web,auth     |
|        | GET|HEAD  | caregivers/new                            |                     | App\Http\Controllers\CaregiversController@create                                  | web,auth     |
|        | POST      | caregivers/store                          |                     | App\Http\Controllers\CaregiversController@store                                   | web          |
|        | GET|HEAD  | caregivers/{caregiver}/edit               |                     | App\Http\Controllers\CaregiversController@edit                                    | web,auth     |
|        | POST      | chats                                     | chats.store         | App\Http\Controllers\ChatsController@store                                        | api          |
|        | GET|HEAD  | chats                                     | chats.index         | App\Http\Controllers\ChatsController@index                                        | api          |
|        | PUT|PATCH | chats/{chat}                              | chats.update        | App\Http\Controllers\ChatsController@update                                       | api          |
|        | DELETE    | chats/{chat}                              | chats.destroy       | App\Http\Controllers\ChatsController@destroy                                      | api          |
|        | GET|HEAD  | chats/{chat}                              | chats.show          | App\Http\Controllers\ChatsController@show                                         | api          |
|        | PUT       | conditions                                |                     | App\Http\Controllers\MyConditionController@store                                  | api          |
|        | GET|HEAD  | conditions                                | conditions.index    | App\Http\Controllers\ConditionsController@index                                   | api          |
|        | POST      | conditions                                | conditions.store    | App\Http\Controllers\ConditionsController@store                                   | api          |
|        | PUT|PATCH | conditions/{condition}                    | conditions.update   | App\Http\Controllers\ConditionsController@update                                  | api          |
|        | GET|HEAD  | conditions/{condition}                    | conditions.show     | App\Http\Controllers\ConditionsController@show                                    | api          |
|        | DELETE    | conditions/{condition}                    | conditions.destroy  | App\Http\Controllers\ConditionsController@destroy                                 | api          |
|        | GET|HEAD  | connections                               |                     | App\Http\Controllers\ConnectionsController@index                                  | api          |
|        | PUT       | connections                               |                     | App\Http\Controllers\ConnectionsController@store                                  | api          |
|        | GET|HEAD  | connections/caregiver/{caregiver_id}      |                     | App\Http\Controllers\ConnectionsController@caregiver                              | api          |
|        | POST      | connections/confirm/{id}                  |                     | App\Http\Controllers\ConnectionsController@confirm                                | api          |
|        | GET|HEAD  | connections/patient/{patient_id}          |                     | App\Http\Controllers\ConnectionsController@patient                                | api          |
|        | POST      | connections/request/{pair1}/with/{pair2}  |                     | App\Http\Controllers\ConnectionsController@request                                | api          |
|        | GET|HEAD  | dashboard                                 |                     | App\Http\Controllers\DashboardController@user_dashboard                           | web,auth     |
|        | GET|HEAD  | delete/activity/{activity}                |                     | App\Http\Controllers\ActivitiesController@webDelete                               | web          |
|        | GET|HEAD  | delete/patient/{patient}                  |                     | App\Http\Controllers\PatientsController@webDelete                                 | web,auth     |
|        | POST      | emergencies                               | emergencies.store   | App\Http\Controllers\EmergenciesController@store                                  | api          |
|        | PUT       | emergencies                               |                     | App\Http\Controllers\EmergenciesController@store                                  | api          |
|        | GET|HEAD  | emergencies                               | emergencies.index   | App\Http\Controllers\EmergenciesController@index                                  | api          |
|        | PUT|PATCH | emergencies/{emergency}                   | emergencies.update  | App\Http\Controllers\EmergenciesController@update                                 | api          |
|        | GET|HEAD  | emergencies/{emergency}                   | emergencies.show    | App\Http\Controllers\EmergenciesController@show                                   | api          |
|        | DELETE    | emergencies/{emergency}                   | emergencies.destroy | App\Http\Controllers\EmergenciesController@destroy                                | api          |
|        | GET|HEAD  | fitbit/login                              |                     | App\Http\Controllers\FitbitController@login                                       | web          |
|        | GET|HEAD  | inbox/{id}/convo/{convo}                  |                     | App\Http\Controllers\ConvosController@show                                        | api          |
|        | GET|HEAD  | inbox/{user}                              |                     | App\Http\Controllers\ChatsController@users                                        | api          |
|        | GET|HEAD  | location/{my_locations}                   |                     | App\Http\Controllers\MyLocationsController@webShow                                | web          |
|        | GET|HEAD  | locations                                 |                     | App\Http\Controllers\MyLocationsController@webindex                               | web          |
|        | PUT       | locations                                 |                     | App\Http\Controllers\MyLocationsController@store                                  | api          |
|        | GET|HEAD  | locations/create                          |                     | App\Http\Controllers\MyLocationsController@create                                 | web          |
|        | POST      | locations/store                           |                     | App\Http\Controllers\MyLocationsController@webStore                               | web          |
|        | GET|HEAD  | login                                     | login               | App\Http\Controllers\Auth\LoginController@showLoginForm                           | web,guest    |
|        | POST      | login                                     |                     | App\Http\Controllers\Auth\LoginController@login                                   | web,guest    |
|        | POST      | logout                                    | logout              | App\Http\Controllers\Auth\LoginController@logout                                  | web          |
|        | GET|HEAD  | next-steps                                |                     | App\Http\Controllers\DashboardController@next_steps                               | web,auth     |
|        | GET|HEAD  | page/{page}                               |                     | App\Http\Controllers\PagesController@show                                         | web          |
|        | GET|HEAD  | pages                                     |                     | App\Http\Controllers\PagesController@list                                         | web          |
|        | POST      | pages                                     |                     | App\Http\Controllers\PagesController@store                                        | web          |
|        | GET|HEAD  | pages/doc/{doc}                           |                     | App\Http\Controllers\DocsController@show                                          | web          |
|        | GET|HEAD  | pages/docs                                |                     | App\Http\Controllers\DocsController@index                                         | web          |
|        | GET|HEAD  | pages/new                                 |                     | App\Http\Controllers\PagesController@create                                       | web          |
|        | POST      | password/email                            | password.email      | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail             | web,guest    |
|        | GET|HEAD  | password/reset                            | password.request    | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm            | web,guest    |
|        | POST      | password/reset                            | password.update     | App\Http\Controllers\Auth\ResetPasswordController@reset                           | web,guest    |
|        | GET|HEAD  | password/reset/{token}                    | password.reset      | App\Http\Controllers\Auth\ResetPasswordController@showResetForm                   | web,guest    |
|        | GET|HEAD  | patient/{patient}                         |                     | App\Http\Controllers\PatientsController@show                                      | web,auth     |
|        | GET|HEAD  | patient/{patient}/activities              |                     | App\Http\Controllers\PatientsController@getPatientActivites                       | web,auth     |
|        | GET|HEAD  | patients                                  |                     | App\Http\Controllers\PatientsController@index                                     | web,auth     |
|        | GET|HEAD  | patients/added                            |                     | Closure                                                                           | web          |
|        | GET|HEAD  | patients/new                              |                     | App\Http\Controllers\PatientsController@create                                    | web,auth     |
|        | GET|HEAD  | patients/{patient}/edit                   |                     | App\Http\Controllers\PatientsController@edit                                      | web,auth     |
|        | GET|HEAD  | profile/{user}                            |                     | App\Http\Controllers\UserController@profile                                       | api          |
|        | GET|HEAD  | register                                  | register            | App\Http\Controllers\Auth\RegisterController@showRegistrationForm                 | web,guest    |
|        | POST      | register                                  |                     | App\Http\Controllers\Auth\RegisterController@register                             | web,guest    |
|        | POST      | roles                                     | roles.store         | App\Http\Controllers\RolesController@store                                        | api          |
|        | GET|HEAD  | roles                                     | roles.index         | App\Http\Controllers\RolesController@index                                        | api          |
|        | DELETE    | roles/{role}                              | roles.destroy       | App\Http\Controllers\RolesController@destroy                                      | api          |
|        | PUT|PATCH | roles/{role}                              | roles.update        | App\Http\Controllers\RolesController@update                                       | api          |
|        | GET|HEAD  | roles/{role}                              | roles.show          | App\Http\Controllers\RolesController@show                                         | api          |
|        | GET|HEAD  | section/edit/{section}                    |                     | App\Http\Controllers\SectionsController@edit                                      | web          |
|        | POST      | section/update                            |                     | App\Http\Controllers\SectionsController@update                                    | web          |
|        | GET|HEAD  | sections                                  |                     | App\Http\Controllers\SectionsController@index                                     | web          |
|        | GET|HEAD  | thank-you                                 |                     | Closure                                                                           | web          |
|        | GET|HEAD  | user                                      |                     | Closure                                                                           | api,auth:api |
|        | GET|HEAD  | user/settings                             |                     | App\Http\Controllers\UserController@webSettings                                   | web,auth     |
|        | GET|HEAD  | user/{user}/activities                    |                     | App\Http\Controllers\ActivitiesController@user                                    | api          |
|        | GET|HEAD  | user/{user}/activities/latest             |                     | App\Http\Controllers\UserController@latestActivity                                | api          |
|        | GET|HEAD  | user/{user}/alerts                        |                     | App\Http\Controllers\AlertsController@users                                       | api          |
|        | GET|HEAD  | user/{user}/alerts/latest                 |                     | App\Http\Controllers\UserController@latestAlerts                                  | api          |
|        | GET|HEAD  | user/{user}/conditions                    |                     | App\Http\Controllers\ConditionsController@users                                   | api          |
|        | GET|HEAD  | user/{user}/emergencies                   |                     | App\Http\Controllers\EmergenciesController@users                                  | api          |
|        | GET|HEAD  | user/{user}/emergencies/latest            |                     | App\Http\Controllers\UserController@latestEmergency                               | api          |
|        | GET|HEAD  | user/{user}/fitbit/token/get              |                     | App\Http\Controllers\ApiTokenController@checkToken                                | api          |
|        | GET|HEAD  | user/{user}/fitbit/token/new              |                     | App\Http\Controllers\ApiTokenController@refresh                                   | api          |
|        | GET|HEAD  | user/{user}/fitbit/token/status           |                     | App\Http\Controllers\ApiTokenController@status                                    | api          |
|        | GET|HEAD  | user/{user}/locations                     |                     | App\Http\Controllers\MyLocationsController@users                                  | api          |
|        | GET|HEAD  | users                                     | users.index         | App\Http\Controllers\UserController@index                                         | api          |
|        | POST      | users                                     | users.store         | App\Http\Controllers\UserController@store                                         | api          |
|        | POST      | users/update                              |                     | App\Http\Controllers\UserController@webUpdate                                     | web,auth     |
|        | GET|HEAD  | users/{user}                              | users.show          | App\Http\Controllers\UserController@show                                          | api          |
|        | PUT|PATCH | users/{user}                              | users.update        | App\Http\Controllers\UserController@update                                        | api,auth     |
|        | DELETE    | users/{user}                              | users.destroy       | App\Http\Controllers\UserController@destroy                                       | api,auth     |
|        | GET|HEAD  | v0.8/activities/limit                     |                     | App\Http\Controllers\API\v08\Activities\ActivitiesController@limit                | api          |
|        | GET|HEAD  | v0.8/activities/limit/{limit}             |                     | App\Http\Controllers\API\v08\Activities\ActivitiesController@limit_specified      | api          |
|        | GET|HEAD  | v0.8/activities/user/{user}/limit         |                     | App\Http\Controllers\API\v08\Activities\ActivitiesController@user_limit           | api          |
|        | GET|HEAD  | v0.8/activities/user/{user}/limit/{limit} |                     | App\Http\Controllers\API\v08\Activities\ActivitiesController@user_limit_specified | api          |
|        | POST      | v0.8/activity/add/bulk                    |                     | App\Http\Controllers\API\v08\Activities\ActivitiesController@bulkStore            | api          |
|        | POST      | v0.8/activity/add/single                  |                     | App\Http\Controllers\API\v08\Activities\ActivitiesController@store                | api          |
|        | GET|HEAD  | v0.8/analytics                            | analytics.index     | App\Http\Controllers\API\v08\Analytics\AnalyticsController@index                  | api          |
|        | POST      | v0.8/analytics                            | analytics.store     | App\Http\Controllers\API\v08\Analytics\AnalyticsController@store                  | api          |
|        | DELETE    | v0.8/analytics/{analytic}                 | analytics.destroy   | App\Http\Controllers\API\v08\Analytics\AnalyticsController@destroy                | api          |
|        | GET|HEAD  | v0.8/analytics/{analytic}                 | analytics.show      | App\Http\Controllers\API\v08\Analytics\AnalyticsController@show                   | api          |
|        | PUT|PATCH | v0.8/analytics/{analytic}                 | analytics.update    | App\Http\Controllers\API\v08\Analytics\AnalyticsController@update                 | api          |
|        | POST      | v0.8/user/auth/{type}                     |                     | App\Http\Controllers\API\v08\Users\UsersController@auth                           | api          |
|        | GET|HEAD  | v0.8/user/check/{type}/{value}            |                     | App\Http\Controllers\API\v08\Users\UsersController@check                          | api          |
|        | GET|HEAD  | v0.8/users                                | users.index         | App\Http\Controllers\API\v08\Users\UsersController@index                          | api          |
|        | POST      | v0.8/users                                | users.store         | App\Http\Controllers\API\v08\Users\UsersController@store                          | api          |
|        | GET|HEAD  | v0.8/users/{user}                         | users.show          | App\Http\Controllers\API\v08\Users\UsersController@show                           | api          |
|        | PUT|PATCH | v0.8/users/{user}                         | users.update        | App\Http\Controllers\API\v08\Users\UsersController@update                         | api          |
|        | DELETE    | v0.8/users/{user}                         | users.destroy       | App\Http\Controllers\API\v08\Users\UsersController@destroy                        | api          |
+--------+-----------+-------------------------------------------+---------------------+-----------------------------------------------------------------------------------+--------------+
