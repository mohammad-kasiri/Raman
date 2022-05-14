<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = Arr::random(['male', 'female']);
        $email = Arr::random([$this->faker->unique()->safeEmail(), null]);
        return [
            'level' => 'patient',
            'gender' => $gender,
            'first_name' => $this->getFirstName($gender),
            'last_name' => $this->getRandomLastName(),
            'mobile' => $this->getUniqePhoneNumber(),
            'email' => $email,
            'email_verified_at' => $this->getEmailVerificationDate($email),
            'mobile_verified_at' => $this->faker->dateTimeBetween('-1 years', 'now', 'Asia/Tehran'),
            'password' => Arr::random([Hash::make('11111111') , null] ),  // 11111111
            'remember_token' => Arr::random([Str::random(50) , null]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function superAdmin()
    {
        return $this->state(function (array $attributes) {
            return [
                'level'      => 'admin',
                'gender'     => 'male',
                'first_name' => 'محمد',
                'last_name'  => 'کثیری',
                'mobile'     => '09109529484',
                'email'      => 'mohammad.kasirey@gmail.com',
                'password'   => Hash::make(11111111),
                'email_verified_at' => now(),
            ];
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'level' => 'admin',
            ];
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function doctor()
    {
        return $this->state(function (array $attributes) {
            return [
                'level' => 'doctor',
            ];
        });
    }

    public function withPassword($samplePassword)
    {
        return $this->state(function (array $attributes) use ($samplePassword) {
            return [
                'password' =>Hash::make($samplePassword),
            ];
        });
    }

    public function withMobile($mobile)
    {
        return $this->state(function (array $attributes) use ($mobile) {
            return [
                'mobile' => $mobile,
            ];
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * * @param string $gender
     * @return string  First Name
     */
    private function getFirstName(string $gender = 'male'): string
    {
        return $gender == 'male'
            ? $this->getRandomMaleFirstName()
            : $this->getRandomFemaleFirstName();
    }

    /**
     * * @param null
     * @return string Male First Name
     */
    private function getRandomMaleFirstName(): string
    {
        $maleNames = ['رضا', 'سجاد', 'شایان', 'دانیال', 'افشین', 'فربد', 'مصطفی', 'مهرداد', 'حامد', 'سپهر', 'محمد', 'علی', 'محمد رضا', 'حسین', 'فرید', 'امیر', 'علیرضا'];
        return Arr::random($maleNames);
    }

    /**
     * * @param null
     * @return string Female First Name
     */
    private function getRandomFemaleFirstName(): string
    {
        $femaleNames = ['یاسمین', 'مینا', 'درسا', 'فاطمه', 'مهدیه', 'الهه', 'سارا', 'نگار', 'نگین', 'راحله', 'سمانه', 'شیما', 'مهسا', 'هدیه', 'هلما', 'حمیرا'];
        return Arr::random($femaleNames);
    }

    /**
     * @param null
     * @return string LastName
     */
    private function getRandomLastName(): string
    {
        $lastNames = ['رضاپور', 'ابراهیمی', 'مرادی', 'میبدی', 'طاهری', 'موسوی', 'پناهی', 'آذری', 'قاضیان', 'شمسی', 'فلاح', 'محمدی', 'ترکاشوند', 'فتحیان', 'تبریزی', 'خراسانی', 'گودرزی', 'شریفی', 'شهبازی', 'حاتمی', 'نعمتی', 'کاظم زاده', 'علیپور', 'رضایی', 'کریمی', 'رحمانی', 'تاجیک', 'حیدری', 'خسروی', 'جهانی'];
        return Arr::random($lastNames);
    }

    /**
     * @return string
     */
    private function getUniqePhoneNumber(): string
    {
        $phone = generatePhone();
        $is_unique = User::query()->where('mobile', '=', $phone)->exists();
        return $is_unique == false
            ? $phone
            : $this->getUniqePhoneNumber();
    }

    /**
     * @param string $email
     * @return \DateTime|null
     */
    private function getEmailVerificationDate(null|string $email): ?\DateTime
    {
        if (is_null($email)) return null;
        return $this->faker->dateTimeBetween('-1 years', 'now', 'Asia/Tehran');
    }
}
