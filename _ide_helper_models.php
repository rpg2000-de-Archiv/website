<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $locale
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \TCG\Voyager\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Translation
 *
 * @property int $id
 * @property string $table_name
 * @property string $column_name
 * @property int $foreign_key
 * @property string $locale
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereForeignKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereValue($value)
 */
	class Translation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\News
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $orig_date
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NewsAuthor|null $author
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereOrigDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereUpdatedAt($value)
 */
	class News extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property string|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PermissionRole
 *
 * @property int $permission_id
 * @property int $role_id
 * @property-read \App\Models\Permission $permission
 * @property-read \App\Models\Role $role
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PermissionRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PermissionRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PermissionRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PermissionRole wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PermissionRole whereRoleId($value)
 */
	class PermissionRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rightnav
 *
 * @property int $id
 * @property string $route
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rightnav whereUpdatedAt($value)
 */
	class Rightnav extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContentSubmission
 *
 * @property int $id
 * @property int $contest_id
 * @property int $place
 * @property string $username
 * @property string|null $submission1title
 * @property string|null $submission1url
 * @property string|null $submission2title
 * @property string|null $submission2url
 * @property string|null $submission3title
 * @property string|null $submission3url
 * @property int|null $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereContestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereSubmission1title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereSubmission1url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereSubmission2title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereSubmission2url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereSubmission3title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereSubmission3url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ContentSubmission whereUsername($value)
 */
	class ContentSubmission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DataRow
 *
 * @property int $id
 * @property int $data_type_id
 * @property string $field
 * @property string $type
 * @property string $display_name
 * @property bool $required
 * @property bool $browse
 * @property bool $read
 * @property bool $edit
 * @property bool $add
 * @property bool $delete
 * @property string|null $details
 * @property int $order
 * @property-read \App\Models\DataType $data_type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDataTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereType($value)
 */
	class DataRow extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Role|null $role
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NewsAuthor
 *
 * @property int $id
 * @property string $username
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\NewsAuthor whereUsername($value)
 */
	class NewsAuthor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menu
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MenuItem[] $menu_items
 * @property-read int|null $menu_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MenuItem
 *
 * @property int $id
 * @property int|null $menu_id
 * @property string $title
 * @property string $url
 * @property string $target
 * @property string|null $icon_class
 * @property string|null $color
 * @property int|null $parent_id
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $route
 * @property string|null $parameters
 * @property-read \App\Models\Menu|null $menu
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereUrl($value)
 */
	class MenuItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rpgmakertool
 *
 * @property int $id
 * @property string $filepath
 * @property string $filename
 * @property string $fileversion
 * @property string $filedescription
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereFiledescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereFilepath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereFileversion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Rpgmakertool whereUpdatedAt($value)
 */
	class Rpgmakertool extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $slug
 * @property string $html
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DataType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $display_name_singular
 * @property string $display_name_plural
 * @property string|null $icon
 * @property string|null $model_name
 * @property string|null $policy_name
 * @property string|null $controller
 * @property string|null $description
 * @property bool $generate_permissions
 * @property int $server_side
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DataRow[] $data_rows
 * @property-read int|null $data_rows_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereController($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDisplayNamePlural($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDisplayNameSingular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereGeneratePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereModelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType wherePolicyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereServerSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereUpdatedAt($value)
 */
	class DataType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserRole
 *
 * @property int $user_id
 * @property int $role_id
 * @property-read \App\Models\Role $role
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereUserId($value)
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string $display_name
 * @property string|null $value
 * @property string|null $details
 * @property string $type
 * @property int $order
 * @property string|null $group
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $key
 * @property string|null $table_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contest
 *
 * @property int $id
 * @property string $title
 * @property string $status
 * @property string $usercount
 * @property string $shortdescription
 * @property string $rules
 * @property string $notes
 * @property string $submission_notes
 * @property string $reward
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $rules_image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereReward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereRulesImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereShortdescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereSubmissionNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contest whereUsercount($value)
 */
	class Contest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FailedJob
 *
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property \Illuminate\Support\Carbon $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\FailedJob whereQueue($value)
 */
	class FailedJob extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Translation
 *
 * @property int $id
 * @property string $table_name
 * @property string $column_name
 * @property int $foreign_key
 * @property string $locale
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereForeignKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Translation whereValue($value)
 */
	class Translation extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class News
 *
 * @property int $id
 * @property Carbon $orig_date
 * @property string $title
 * @property string $content
 * @property int $author_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereOrigDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\News whereUpdatedAt($value)
 */
	class News extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property Carbon|null $created_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class PermissionRole
 *
 * @property int $permission_id
 * @property int $role_id
 * @property Permission $permission
 * @property Role $role
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PermissionRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PermissionRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PermissionRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PermissionRole wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\PermissionRole whereRoleId($value)
 */
	class PermissionRole extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Rightnav
 *
 * @property int $id
 * @property string $route
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rightnav whereUpdatedAt($value)
 */
	class Rightnav extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class ContentSubmission
 *
 * @property int $id
 * @property int $contest_id
 * @property int $place
 * @property string $username
 * @property string|null $submission1title
 * @property string|null $submission1url
 * @property string|null $submission2title
 * @property string|null $submission2url
 * @property string|null $submission3title
 * @property string|null $submission3url
 * @property int|null $points
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereContestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereSubmission1title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereSubmission1url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereSubmission2title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereSubmission2url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereSubmission3title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereSubmission3url($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\ContentSubmission whereUsername($value)
 */
	class ContentSubmission extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class DataRow
 *
 * @property int $id
 * @property int $data_type_id
 * @property string $field
 * @property string $type
 * @property string $display_name
 * @property bool $required
 * @property bool $browse
 * @property bool $read
 * @property bool $edit
 * @property bool $add
 * @property bool $delete
 * @property string|null $details
 * @property int $order
 * @property DataType $data_type
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereDataTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataRow whereType($value)
 */
	class DataRow extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $settings
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Role $role
 * @property Collection|Role[] $roles
 * @package App\Models\Base
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Permission[] $permissions
 * @property Collection|User[] $users
 * @package App\Models\Base
 * @property-read int|null $permissions_count
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class NewsAuthor
 *
 * @property int $id
 * @property string $username
 * @property string $contact
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\NewsAuthor whereUsername($value)
 */
	class NewsAuthor extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Menu
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|MenuItem[] $menu_items
 * @package App\Models\Base
 * @property-read int|null $menu_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class MenuItem
 *
 * @property int $id
 * @property int|null $menu_id
 * @property string $title
 * @property string $url
 * @property string $target
 * @property string|null $icon_class
 * @property string|null $color
 * @property int|null $parent_id
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $route
 * @property string|null $parameters
 * @property Menu $menu
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\MenuItem whereUrl($value)
 */
	class MenuItem extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Rpgmakertool
 *
 * @property int $id
 * @property string $filepath
 * @property string $filename
 * @property string $fileversion
 * @property string $filedescription
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereFiledescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereFilepath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereFileversion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Rpgmakertool whereUpdatedAt($value)
 */
	class Rpgmakertool extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Page
 *
 * @property int $id
 * @property string $slug
 * @property string $html
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page whereHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class DataType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $display_name_singular
 * @property string $display_name_plural
 * @property string|null $icon
 * @property string|null $model_name
 * @property string|null $policy_name
 * @property string|null $controller
 * @property string|null $description
 * @property bool $generate_permissions
 * @property int $server_side
 * @property string|null $details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|DataRow[] $data_rows
 * @package App\Models\Base
 * @property-read int|null $data_rows_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereController($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereDisplayNamePlural($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereDisplayNameSingular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereGeneratePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereModelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType wherePolicyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereServerSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\DataType whereUpdatedAt($value)
 */
	class DataType extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class UserRole
 *
 * @property int $user_id
 * @property int $role_id
 * @property Role $role
 * @property User $user
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\UserRole whereUserId($value)
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Setting
 *
 * @property int $id
 * @property string $key
 * @property string $display_name
 * @property string|null $value
 * @property string|null $details
 * @property string $type
 * @property int $order
 * @property string|null $group
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Permission
 *
 * @property int $id
 * @property string $key
 * @property string|null $table_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Role[] $roles
 * @package App\Models\Base
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class Contest
 *
 * @property int $id
 * @property string $title
 * @property string $status
 * @property string $usercount
 * @property string $shortdescription
 * @property string $rules
 * @property string $notes
 * @property string $submission_notes
 * @property string $reward
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $rules_image
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereReward($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereRulesImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereShortdescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereSubmissionNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Contest whereUsercount($value)
 */
	class Contest extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class FailedJob
 *
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property Carbon $failed_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\FailedJob whereQueue($value)
 */
	class FailedJob extends \Eloquent {}
}

