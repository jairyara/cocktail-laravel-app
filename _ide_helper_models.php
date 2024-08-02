<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property int $alcoholic
 * @property string $glass
 * @property string $instructions
 * @property string $image
 * @property string|null $ingredient1
 * @property string|null $ingredient2
 * @property string|null $ingredient3
 * @property string|null $ingredient4
 * @property string|null $ingredient5
 * @property string|null $ingredient6
 * @property string|null $ingredient7
 * @property string|null $ingredient8
 * @property string|null $ingredient9
 * @property string|null $ingredient10
 * @property string|null $ingredient11
 * @property string|null $ingredient12
 * @property string|null $ingredient13
 * @property string|null $ingredient14
 * @property string|null $ingredient15
 * @property string|null $measure1
 * @property string|null $measure2
 * @property string|null $measure3
 * @property string|null $measure4
 * @property string|null $measure5
 * @property string|null $measure6
 * @property string|null $measure7
 * @property string|null $measure8
 * @property string|null $measure9
 * @property string|null $measure10
 * @property string|null $measure11
 * @property string|null $measure12
 * @property string|null $measure13
 * @property string|null $measure14
 * @property string|null $measure15
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CocktailFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereAlcoholic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereGlass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereIngredient9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereMeasure9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cocktail whereUpdatedAt($value)
 */
	class Cocktail extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

