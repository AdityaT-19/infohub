<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final readonly class StudentLogin
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $user = Student::where('usn', $args["usn"])->first();
 
    if (! $user || ! Hash::check($args["password"], $user->password)) {
        throw ValidationException::withMessages([
            'usn' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken('web')->plainTextToken;
    }
}
