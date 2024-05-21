<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Club;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final readonly class ClubLogin
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $user = Club::where('cid', $args["cid"])->first();
 
    if (! $user || ! Hash::check($args["password"], $user->password)) {
        throw ValidationException::withMessages([
            'cid' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken('web')->plainTextToken;
    }
}
