# Connection
PHP 8 Connection Management

[![Build Status](https://scrutinizer-ci.com/g/jaypotter/Connection/badges/build.png?b=main)](https://scrutinizer-ci.com/g/jaypotter/Connection/build-status/main)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/0d4d253facbf4f0fab66a04dc3eccc10)](https://www.codacy.com/gh/jaypotter/Connection/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=jaypotter/Connection&amp;utm_campaign=Badge_Grade)
[![codebeat badge](https://codebeat.co/badges/fd022dcc-a961-4a74-961e-92f503b63b3c)](https://codebeat.co/projects/github-com-jaypotter-connection-main)
[![CodeFactor](https://www.codefactor.io/repository/github/jaypotter/connection/badge)](https://www.codefactor.io/repository/github/jaypotter/connection)
[![Maintainability](https://api.codeclimate.com/v1/badges/9747de4443b5b232b324/maintainability)](https://codeclimate.com/github/jaypotter/Connection/maintainability)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jaypotter/Connection/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/jaypotter/Connection/?branch=main)

## Potter\Connection

-   abstract public connect(): void;
-   abstract public getHost(): string;
-   abstract public getPrefix(): string;
-   abstract public setHost(string $host): void;

### Potter\Connection\Local

-   final public getHost(): string;
-   public function getPrefix(): string;
-   final public function setHost(string $host): void;

### Potter\Connection\Remote
-   final public function getHost(): string;
-   final public function getPass(): string;
-   final public function getPort(): int;
-   public function getPrefix(): string;
-   final public function getUser(): string;
-   final public function setHost(string $host): void;
-   final public function setPass(string $pass): void;
-   final public function setPort(int $port): void;
-   final public function setUser(string $user): void;
