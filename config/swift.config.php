<?php
if (getenv('SWIFT_URL')) {
  $CONFIG = array(
    'objectstore' => [
      'class' => 'OC\\Files\\ObjectStore\\Swift',
      'arguments' => [
        'autocreate' => true,
        'user' => [
          'name' => getenv('SWIFT_USER_NAME'),
          'password' => getenv('SWIFT_USER_PASSWORD'),
          'domain' => [
            'name' => (getenv('SWIFT_USER_DOMAIN')) ? getenv('SWIFT_USER_DOMAIN') : 'Default',
          ],
        ],
        'scope' => [
          'project' => [
            'name' => getenv('SWIFT_PROJECT_NAME'),
            'domain' => [
              'name' => (getenv('SWIFT_PROJECT_DOMAIN')) ? getenv('SWIFT_PROJECT_DOMAIN') : 'Default',
            ],
          ],
        ],
        'serviceName' => (getenv('SWIFT_SERVICE_NAME')) ? getenv('SWIFT_SERVICE_NAME') : 'swift',
        'region' => getenv('SWIFT_REGION'),
        'url' => getenv('SWIFT_URL'),
        'bucket' => getenv('SWIFT_CONTAINER_NAME'),
      ]
    ]
  );
}
