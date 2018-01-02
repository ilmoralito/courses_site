<?php

namespace AppBundle\Service\Course;

use Psr\Log\LoggerInterface;

class Course
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getCourseList()
    {
        $this->logger->info('Getting course list');

        $courseList = [
            [
                'name' => 'Course number one',
                'slug' => 'Course_number_one',
                'startDate' => '2018-01-29',
                'closingDate' => '2018-02-29',
                'modality' => 'Sunday',
                'duration' => '3 semanas',
                'price' => '100 USD',
                'registrationPrice' => '30 USD',
                'schedule' => '8:00 - 5:00',
                'objective' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ad adipisci numquam distinctio, eligendi vero, libero, eius aliquam qui voluptates fugiat repudiandae recusandae delectus, labore quidem sit totam error omnis.',
                'addressedTo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati id, cumque assumenda quas mollitia illum, at eos modi, necessitatibus iste ratione! Amet cum deserunt alias fugiat odio, quis officia rerum.',
                'results' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eos, iste. Odit tempore doloremque, voluptatem in sequi eaque cupiditate ut, praesentium, fuga quo, modi nemo quaerat facere id veritatis eius.',
                'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repudiandae at eum aliquid, animi saepe fugit fuga, temporibus placeat reiciendis possimus dolore! Ut ipsum natus doloremque fuga aliquid quisquam at.',
                'faqs' => [
                    [
                        'question' => 'Question1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ]
                ],
                'facilitators' => [
                    [
                        'fullName' => 'John Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johndoe.com.ni'
                    ],[
                        'fullName' => 'Johan Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johandoe.com.ni'
                    ],[
                        'fullName' => 'Jone Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://jonedoe.com.ni'
                    ]
                ],
                'thematics' => [
                    [
                        'unity' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        'topics' =>[
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet lorem',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing',
                            'Lorem ipsum dolor sit amet, consectetur',
                        ],
                    ],[
                        'unity' => 'Repellat voluptas, magni, id dignissimos nostrum voluptate',
                        'topics' => [
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                        ]
                    ],

                ]
            ],[
                'name' => 'Course number two',
                'slogan' => 'Some message about the course',
                'slug' => 'Course_number_two',
                'startDate' => '2018-01-29',
                'closingDate' => '2018-02-29',
                'modality' => 'Sunday',
                'duration' => '3 semanas',
                'price' => '100 USD',
                'registrationPrice' => '30 USD',
                'schedule' => '8:00 - 5:00',
                'objective' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ad adipisci numquam distinctio, eligendi vero, libero, eius aliquam qui voluptates fugiat repudiandae recusandae delectus, labore quidem sit totam error omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat corrupti dolorum hic maxime blanditiis quod a, consequuntur, suscipit minima distinctio libero debitis facilis. Quasi laborum, facere illum culpa quae ipsam.',
                'addressedTo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati id, cumque assumenda quas mollitia illum, at eos modi, necessitatibus iste ratione! Amet cum deserunt alias fugiat odio, quis officia rerum.',
                'results' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eos, iste. Odit tempore doloremque, voluptatem in sequi eaque cupiditate ut, praesentium, fuga quo, modi nemo quaerat facere id veritatis eius.',
                'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repudiandae at eum aliquid, animi saepe fugit fuga, temporibus placeat reiciendis possimus dolore! Ut ipsum natus doloremque fuga aliquid quisquam at.',
                'faqs' => [
                    [
                        'question' => 'Question1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ]
                ],
                'facilitators' => [
                    [
                        'fullName' => 'John Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johndoe.com.ni'
                    ],[
                        'fullName' => 'Johan Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johandoe.com.ni'
                    ],[
                        'fullName' => 'Jone Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://jonedoe.com.ni'
                    ]
                ],
                'thematics' => [
                    [
                        'unity' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        'topics' =>[
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet lorem',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing',
                            'Lorem ipsum dolor sit amet, consectetur',
                        ],
                    ],[
                        'unity' => 'Repellat voluptas, magni, id dignissimos nostrum voluptate',
                        'topics' => [
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                        ]
                    ],

                ]
            ],[
                'name' => 'Course number three',
                'slogan' => 'Some message about the course',
                'slug' => 'Course_number_three',
                'startDate' => '2018-01-29',
                'closingDate' => '2018-02-29',
                'modality' => 'Sunday',
                'duration' => '3 semanas',
                'price' => '100 USD',
                'registrationPrice' => '30 USD',
                'schedule' => '8:00 - 5:00',
                'objective' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ad adipisci numquam distinctio, eligendi vero, libero, eius aliquam qui voluptates fugiat repudiandae recusandae delectus, labore quidem sit totam error omnis.',
                'addressedTo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati id, cumque assumenda quas mollitia illum, at eos modi, necessitatibus iste ratione! Amet cum deserunt alias fugiat odio, quis officia rerum.',
                'results' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eos, iste. Odit tempore doloremque, voluptatem in sequi eaque cupiditate ut, praesentium, fuga quo, modi nemo quaerat facere id veritatis eius.',
                'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repudiandae at eum aliquid, animi saepe fugit fuga, temporibus placeat reiciendis possimus dolore! Ut ipsum natus doloremque fuga aliquid quisquam at.',
                'faqs' => [
                    [
                        'question' => 'Question1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question1?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ]
                ],
                'facilitators' => [
                    [
                        'fullName' => 'John Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johndoe.com.ni'
                    ],[
                        'fullName' => 'Johan Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johandoe.com.ni'
                    ],[
                        'fullName' => 'Jone Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://jonedoe.com.ni'
                    ]
                ],
                'thematics' => [
                    [
                        'unity' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        'topics' =>[
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet lorem',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing',
                            'Lorem ipsum dolor sit amet, consectetur',
                            'Lorem ipsum dolor sit amet, consectetur',
                            'Lorem ipsum dolor sit amet, consectetur',
                        ],
                    ],[
                        'unity' => 'Repellat voluptas, magni, id dignissimos nostrum voluptate',
                        'topics' => [
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                        ]
                    ],

                ]
            ],[
                'name' => 'Course number four',
                'slogan' => 'Some message about the course',
                'slug' => 'course_number_four',
                'startDate' => '2018-01-29',
                'closingDate' => '2018-02-29',
                'modality' => 'Sunday',
                'duration' => '3 semanas',
                'price' => '100 USD',
                'registrationPrice' => '30 USD',
                'schedule' => '8:00 - 5:00',
                'objective' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ad adipisci numquam distinctio, eligendi vero, libero, eius aliquam qui voluptates fugiat repudiandae recusandae delectus, labore quidem sit totam error omnis.',
                'addressedTo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati id, cumque assumenda quas mollitia illum, at eos modi, necessitatibus iste ratione! Amet cum deserunt alias fugiat odio, quis officia rerum.',
                'results' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eos, iste. Odit tempore doloremque, voluptatem in sequi eaque cupiditate ut, praesentium, fuga quo, modi nemo quaerat facere id veritatis eius.',
                'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repudiandae at eum aliquid, animi saepe fugit fuga, temporibus placeat reiciendis possimus dolore! Ut ipsum natus doloremque fuga aliquid quisquam at.',
                'faqs' => [
                    [
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ]
                ],
                'facilitators' => [
                    [
                        'fullName' => 'John Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johndoe.com.ni'
                    ],[
                        'fullName' => 'Johan Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johandoe.com.ni'
                    ]
                ],
                'thematics' => [
                    [
                        'unity' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        'topics' =>[
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet lorem',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing',
                            'Lorem ipsum dolor sit amet, consectetur',
                        ],
                    ],[
                        'unity' => 'Repellat voluptas, magni, id dignissimos nostrum voluptate',
                        'topics' => [
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                        ]
                    ],
                ]
            ],[
                'name' => 'Course number five',
                'slogan' => 'Some message about the course',
                'slug' => 'course_number_five',
                'startDate' => '2018-01-29',
                'closingDate' => '2018-02-29',
                'modality' => 'Sunday',
                'duration' => '3 semanas',
                'price' => '100 USD',
                'registrationPrice' => '30 USD',
                'schedule' => '8:00 - 5:00',
                'objective' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ad adipisci numquam distinctio, eligendi vero, libero, eius aliquam qui voluptates fugiat repudiandae recusandae delectus, labore quidem sit totam error omnis.',
                'addressedTo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati id, cumque assumenda quas mollitia illum, at eos modi, necessitatibus iste ratione! Amet cum deserunt alias fugiat odio, quis officia rerum.',
                'results' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, eos, iste. Odit tempore doloremque, voluptatem in sequi eaque cupiditate ut, praesentium, fuga quo, modi nemo quaerat facere id veritatis eius.',
                'requirements' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repudiandae at eum aliquid, animi saepe fugit fuga, temporibus placeat reiciendis possimus dolore! Ut ipsum natus doloremque fuga aliquid quisquam at.',
                'faqs' => [
                    [
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ],[
                        'question' => 'Question?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates rem perspiciatis quae quia voluptatum, porro id! Beatae laboriosam laudantium minus enim a, veniam ipsum ea obcaecati eos expedita veritatis?'
                    ]
                ],
                'facilitators' => [
                    [
                        'fullName' => 'John Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johndoe.com.ni'
                    ],[
                        'fullName' => 'Johan Doe',
                        'profile' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quibusdam doloremque odio repudiandae, accusamus rerum itaque eveniet consequatur corporis nisi nulla deleniti aspernatur repellendus aut molestiae nemo debitis. Fuga, doloribus.',
                        'site' => 'http://johandoe.com.ni'
                    ]
                ],
                'thematics' => [
                    [
                        'unity' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        'topics' =>[
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet lorem',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing',
                            'Lorem ipsum dolor sit amet, consectetur',
                        ],
                    ],[
                        'unity' => 'Repellat voluptas, magni, id dignissimos nostrum voluptate',
                        'topics' => [
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                            'Aspernatur commodi vel voluptate suscipit sit',
                        ]
                    ],
                ]
            ]
        ];

        return $courseList;
    }

    public function getCourse($slug)
    {
        $courseList = $this->getCourseList();
        $result;

        foreach ($courseList as $course) {
            if ($course['slug'] === $slug) { $result = $course; break; }
        }

        return $result;
    }

    public function getCourseThematics($slug)
    {
        $course = $this->getCourse($slug);

        return $course['thematics'];
    }

    public function getCourseFacilitators($slug)
    {
        $course = $this->getCourse($slug);

        return $course['facilitators'];
    }

    public function getCourseFAQS($slug)
    {
        $course = $this->getCourse($slug);

        return $course['faqs'];
    }
}
