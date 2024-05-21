<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final readonly class TeacherLogin
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $user = Teacher::where('tid', $args["tid"])->first();
 
    if (! $user || ! Hash::check($args["password"], $user->password)) {
        throw ValidationException::withMessages([
            'tid' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken('web')->plainTextToken;
    }
}
