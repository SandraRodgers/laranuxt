<?php

namespace App\Http\Controllers;

use acidjazz\metapi\MetApi;
use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, MetApi;
    /**
     * Display our routes
     *
     * @return string
     */
    public function routes(): string
    {
        Artisan::call('route:list');
        $routes = explode("\n", Artisan::output());
        foreach ($routes as $index=>$route) {
            if (strpos($route, 'debugbar') !== false) {
                unset($routes[$index]);
            }
        }
        return '<pre>'.implode("\n", $routes).'</pre>';
    }

    /**
     * Example endpoint returning random users
     *
     * @param Request $request
     * @return mixed
     */
    public function example(Request $request): Response|JsonResponse
    {
        $this
            ->option('count', 'required|integer')
            ->verify();

        $faker = Factory::create();
        $users = [];

        for ($i = 0; $i !== (int) $request->get('count'); $i++) {
            $email = $faker->unique()->safeEmail;
            $users[] = [
                'name' => $faker->name(),
                'job' => $faker->jobTitle,
                'email' => $email,
                'phone' => $faker->phoneNumber(),
                'avatar' => 'https://avatars.dicebear.com/api/human/'.$email.'.svg',
            ];
        }

        return $this->render($users);
    }

    public function error(): Response|JsonResponse
    {
        return $this->render(['forced_error' => $forced_error]);
    }

    public function profile(Request $request): Response|JsonResponse
    {
        $this
            ->option('count', 'required|integer')
            ->verify();

        $faker = Factory::create();
        $users = [];

        for ($i = 0; $i !== (int) $request->get('count'); $i++) {
            $email = $faker->unique()->safeEmail;
            $profiles[] = [
                "id"=>"1",
                "name" => "Sandra Rodgers",
                "job" => "Front End Developer",
                "jobDetails" => "In my current role, I have gotten to experience a variety of front end development projects. One of the main projects was Alkami's UI component library made from VueJS. I had the chance to build components entirely from scratch. One really interesting one I did was the tooltip, which was unique because I built it as a vue-directive. Another project that I've been working on is an application we are making for our clients to use so they can build out their themes. In the future, I want to gain more experience building applications in Vue, and I'm very interested in learning about cloud technologies like AWS, headless CMS, and about Jamstack.",
                "background" => "I recently changed careers to web development after working as a teacher for over 10 years. From 2008-2015 I taught in Asia (China, Japan, and Malaysia), and from 2015-2018 I worked at a school district in Lawrence, Massachusetts. In January 2019, I enrolled in a full stack bootcamp to help kickstart my career-change to development. After I completed the program, the bootcamp hired me as a mentor (basically a teaching assistant), and I worked for several months helping students through the full stack program, until I left to work at my current position at Alkami, where I work on the UXDev team as a Front End Developer.",
                "email" => "srodg7@gmail.com",
                "phone" => "619-547-6195",
                "avatar" => "https://avatars.dicebear.com/api/human/".$email.".svg",
                "techSkillsConfident" => "Vuejs Javascript HTML CSS Nuxt TailwindCSS  Storybook",
                "techSkillsSome" => "NodeJs Typescript React AWS Firebase",
                "value" => "I consider my strengths to be the following: I have a strong work ethic, I am meticulous, I enjoy learning and am constantly working to increase my knowledge and skills in the areas I aim to become an expert in. While I work very well independently and enjoy my quiet time alone to muse over a problem, I also really enjoy a collaborative work environment, especially when the team has a shared goal of helping each other to learn new things.",
                "otherInterests" => "Outside of web development, my main interests are food (I'm a foodie who enjoys cooking and especially enjoys eating at amazing restaurants), my chihuahuas, reading fiction (former English teacher), Mexican culture (I lived in Mexico during college and I learned Spanish while I was there), and of course I enjoy traveling, although that is not something I have done lately. I am married, and my husband and I bought a house a year ago in Plano, Texas, and we love it in the DFW area, even though we are transplants from California.",
                "interestingFacts" => "I lived in Asia from 2008-2015 - 2 years in China, 3 years in Japan, and 1 year in Malaysia. "
            ];
        }

        return $this->render($profiles);
    }

    public function deleteProfile(Request $request): Response|JsonResponse
    {
        $this
            ->option('count', 'required|integer')
            ->verify();

        $faker = Factory::create();
        $users = [];

        for ($i = 0; $i !== (int) $request->get('count'); $i++) {
            $email = $faker->unique()->safeEmail;
            $profiles[] = [
                'id'=>'1',
                'name' => 'Sandra Rodgers',
                'lastName' => 'Rodgers',
                'job' => 'Front End Developer',
                'jobDetails' => 'job details here',
                'email' => 'srodg7@gmail.com',
                'phone' => '619-547-6195',
                'avatar' => 'https://avatars.dicebear.com/api/human/'.$email.'.svg',
                'techSkills' => 'Vuejs Javascript HTML CSS SCSS Nuxt TailwindCSS React Storybook Typescript',
                'value' => 'You should offer me a position because...'
            ];
        }

        return $this->render($profiles);
    }


}
