<?php

return [
  'uploads' => [
    'size' => 1000, // Maximale bestandsgrootte in MB
    'types' => ['jpg', 'jpeg', 'png', 'gif', 'webp'], // Toegestane bestandstypes
  ],
  'media' => [
    'upload' => [
      'maxSize' => '1000M', // Maximale bestandsgrootte
    ],
  ],
  // Andere configuraties
  'media' => [
    'upload' => [
      'maxSize' => '1000M', // Maximale bestandsgrootte in megabytes
      'types' => ['jpg', 'jpeg', 'png', 'gif', 'webp'], // Toegestane bestandstypes
    ],
  ],
];
