<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Auth\\Auth' => $baseDir . '/src/Auth/Auth.php',
    'App\\Config\\Config' => $baseDir . '/src/Config/Config.php',
    'App\\Controllers\\AigController' => $baseDir . '/src/Controllers/AigController.php',
    'App\\Controllers\\ApiController' => $baseDir . '/src/Controllers/ApiController.php',
    'App\\Controllers\\Controller' => $baseDir . '/src/Controllers/Controller.php',
    'App\\Interfaces\\ObservableInterface' => $baseDir . '/src/Interfaces/ObservableInterface.php',
    'App\\Interfaces\\ObserverInterface' => $baseDir . '/src/Interfaces/ObserverInterface.php',
    'App\\Interfaces\\RegisterInterface' => $baseDir . '/src/Interfaces/RegisterInterface.php',
    'App\\Interfaces\\TableInterface' => $baseDir . '/src/Interfaces/TableInterface.php',
    'App\\Modules\\Marca' => $baseDir . '/src/Modules/Marca.php',
    'App\\Modules\\Medida' => $baseDir . '/src/Modules/Medida.php',
    'App\\Modules\\Producto' => $baseDir . '/src/Modules/Producto.php',
    'App\\Modules\\Sector' => $baseDir . '/src/Modules/Sector.php',
    'App\\Modules\\Usuario' => $baseDir . '/src/Modules/Usuario.php',
    'App\\Primitives\\MongoConnection' => $baseDir . '/src/Primitves/MongoConnection.php',
    'App\\Tools\\Database' => $baseDir . '/src/Tools/Database.php',
    'App\\Tools\\DatabasePool' => $baseDir . '/src/Tools/DatabasePool.php',
    'App\\Tools\\Mongo' => $baseDir . '/src/Tools/Mongo.php',
    'App\\Tools\\Socket' => $baseDir . '/src/Tools/Socket.php',
    'ElephantIO\\AbstractPayload' => $vendorDir . '/wisembly/elephant.io/src/AbstractPayload.php',
    'ElephantIO\\AbstractPayloadTest' => $vendorDir . '/wisembly/elephant.io/test/AbstractPayloadTest.php',
    'ElephantIO\\Client' => $vendorDir . '/wisembly/elephant.io/src/Client.php',
    'ElephantIO\\EngineInterface' => $vendorDir . '/wisembly/elephant.io/src/EngineInterface.php',
    'ElephantIO\\Engine\\AbstractSocketIO' => $vendorDir . '/wisembly/elephant.io/src/Engine/AbstractSocketIO.php',
    'ElephantIO\\Engine\\SocketIO\\Session' => $vendorDir . '/wisembly/elephant.io/src/Engine/SocketIO/Session.php',
    'ElephantIO\\Engine\\SocketIO\\Version0X' => $vendorDir . '/wisembly/elephant.io/src/Engine/SocketIO/Version0X.php',
    'ElephantIO\\Engine\\SocketIO\\Version1X' => $vendorDir . '/wisembly/elephant.io/src/Engine/SocketIO/Version1X.php',
    'ElephantIO\\Engine\\SocketIO\\Version2X' => $vendorDir . '/wisembly/elephant.io/src/Engine/SocketIO/Version2X.php',
    'ElephantIO\\Exception\\MalformedUrlException' => $vendorDir . '/wisembly/elephant.io/src/Exception/MalformedUrlException.php',
    'ElephantIO\\Exception\\ServerConnectionFailureException' => $vendorDir . '/wisembly/elephant.io/src/Exception/ServerConnectionFailureException.php',
    'ElephantIO\\Exception\\SocketException' => $vendorDir . '/wisembly/elephant.io/src/Exception/SocketException.php',
    'ElephantIO\\Exception\\UnsupportedActionException' => $vendorDir . '/wisembly/elephant.io/src/Exception/UnsupportedActionException.php',
    'ElephantIO\\Exception\\UnsupportedTransportException' => $vendorDir . '/wisembly/elephant.io/src/Exception/UnsupportedTransportException.php',
    'ElephantIO\\Payload' => $vendorDir . '/wisembly/elephant.io/test/AbstractPayloadTest.php',
    'ElephantIO\\Payload\\Decoder' => $vendorDir . '/wisembly/elephant.io/src/Payload/Decoder.php',
    'ElephantIO\\Payload\\DecoderTest' => $vendorDir . '/wisembly/elephant.io/test/Payload/DecoderTest.php',
    'ElephantIO\\Payload\\Encoder' => $vendorDir . '/wisembly/elephant.io/src/Payload/Encoder.php',
    'ElephantIO\\Payload\\EncoderTest' => $vendorDir . '/wisembly/elephant.io/test/Payload/EncoderTest.php',
    'FastRoute\\BadRouteException' => $vendorDir . '/nikic/fast-route/src/BadRouteException.php',
    'FastRoute\\DataGenerator' => $vendorDir . '/nikic/fast-route/src/DataGenerator.php',
    'FastRoute\\DataGenerator\\CharCountBased' => $vendorDir . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
    'FastRoute\\DataGenerator\\GroupCountBased' => $vendorDir . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
    'FastRoute\\DataGenerator\\GroupPosBased' => $vendorDir . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
    'FastRoute\\DataGenerator\\MarkBased' => $vendorDir . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
    'FastRoute\\DataGenerator\\RegexBasedAbstract' => $vendorDir . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
    'FastRoute\\Dispatcher' => $vendorDir . '/nikic/fast-route/src/Dispatcher.php',
    'FastRoute\\Dispatcher\\CharCountBased' => $vendorDir . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
    'FastRoute\\Dispatcher\\GroupCountBased' => $vendorDir . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
    'FastRoute\\Dispatcher\\GroupPosBased' => $vendorDir . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
    'FastRoute\\Dispatcher\\MarkBased' => $vendorDir . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
    'FastRoute\\Dispatcher\\RegexBasedAbstract' => $vendorDir . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
    'FastRoute\\Route' => $vendorDir . '/nikic/fast-route/src/Route.php',
    'FastRoute\\RouteCollector' => $vendorDir . '/nikic/fast-route/src/RouteCollector.php',
    'FastRoute\\RouteParser' => $vendorDir . '/nikic/fast-route/src/RouteParser.php',
    'FastRoute\\RouteParser\\Std' => $vendorDir . '/nikic/fast-route/src/RouteParser/Std.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\SeekException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\Rfc7230' => $vendorDir . '/guzzlehttp/psr7/src/Rfc7230.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\UriTemplate' => $vendorDir . '/guzzlehttp/guzzle/src/UriTemplate.php',
    'Interop\\Container\\ContainerInterface' => $vendorDir . '/container-interop/container-interop/src/Interop/Container/ContainerInterface.php',
    'Interop\\Container\\Exception\\ContainerException' => $vendorDir . '/container-interop/container-interop/src/Interop/Container/Exception/ContainerException.php',
    'Interop\\Container\\Exception\\NotFoundException' => $vendorDir . '/container-interop/container-interop/src/Interop/Container/Exception/NotFoundException.php',
    'Medoo\\Medoo' => $vendorDir . '/catfan/medoo/src/Medoo.php',
    'Medoo\\Raw' => $vendorDir . '/catfan/medoo/src/Medoo.php',
    'Pimple\\Container' => $vendorDir . '/pimple/pimple/src/Pimple/Container.php',
    'Pimple\\Exception\\ExpectedInvokableException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
    'Pimple\\Exception\\FrozenServiceException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
    'Pimple\\Exception\\InvalidServiceIdentifierException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
    'Pimple\\Exception\\UnknownIdentifierException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
    'Pimple\\Psr11\\Container' => $vendorDir . '/pimple/pimple/src/Pimple/Psr11/Container.php',
    'Pimple\\Psr11\\ServiceLocator' => $vendorDir . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
    'Pimple\\ServiceIterator' => $vendorDir . '/pimple/pimple/src/Pimple/ServiceIterator.php',
    'Pimple\\ServiceProviderInterface' => $vendorDir . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
    'Pimple\\Tests\\Fixtures\\Invokable' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
    'Pimple\\Tests\\Fixtures\\NonInvokable' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
    'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
    'Pimple\\Tests\\Fixtures\\Service' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
    'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
    'Pimple\\Tests\\PimpleTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
    'Pimple\\Tests\\Psr11\\ContainerTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Psr11/ContainerTest.php',
    'Pimple\\Tests\\Psr11\\ServiceLocatorTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Psr11/ServiceLocatorTest.php',
    'Pimple\\Tests\\ServiceIteratorTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/ServiceIteratorTest.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'Slim\\App' => $vendorDir . '/slim/slim/Slim/App.php',
    'Slim\\CallableResolver' => $vendorDir . '/slim/slim/Slim/CallableResolver.php',
    'Slim\\CallableResolverAwareTrait' => $vendorDir . '/slim/slim/Slim/CallableResolverAwareTrait.php',
    'Slim\\Collection' => $vendorDir . '/slim/slim/Slim/Collection.php',
    'Slim\\Container' => $vendorDir . '/slim/slim/Slim/Container.php',
    'Slim\\DefaultServicesProvider' => $vendorDir . '/slim/slim/Slim/DefaultServicesProvider.php',
    'Slim\\DeferredCallable' => $vendorDir . '/slim/slim/Slim/DeferredCallable.php',
    'Slim\\Exception\\ContainerException' => $vendorDir . '/slim/slim/Slim/Exception/ContainerException.php',
    'Slim\\Exception\\ContainerValueNotFoundException' => $vendorDir . '/slim/slim/Slim/Exception/ContainerValueNotFoundException.php',
    'Slim\\Exception\\InvalidMethodException' => $vendorDir . '/slim/slim/Slim/Exception/InvalidMethodException.php',
    'Slim\\Exception\\MethodNotAllowedException' => $vendorDir . '/slim/slim/Slim/Exception/MethodNotAllowedException.php',
    'Slim\\Exception\\NotFoundException' => $vendorDir . '/slim/slim/Slim/Exception/NotFoundException.php',
    'Slim\\Exception\\SlimException' => $vendorDir . '/slim/slim/Slim/Exception/SlimException.php',
    'Slim\\Handlers\\AbstractError' => $vendorDir . '/slim/slim/Slim/Handlers/AbstractError.php',
    'Slim\\Handlers\\AbstractHandler' => $vendorDir . '/slim/slim/Slim/Handlers/AbstractHandler.php',
    'Slim\\Handlers\\Error' => $vendorDir . '/slim/slim/Slim/Handlers/Error.php',
    'Slim\\Handlers\\NotAllowed' => $vendorDir . '/slim/slim/Slim/Handlers/NotAllowed.php',
    'Slim\\Handlers\\NotFound' => $vendorDir . '/slim/slim/Slim/Handlers/NotFound.php',
    'Slim\\Handlers\\PhpError' => $vendorDir . '/slim/slim/Slim/Handlers/PhpError.php',
    'Slim\\Handlers\\Strategies\\RequestResponse' => $vendorDir . '/slim/slim/Slim/Handlers/Strategies/RequestResponse.php',
    'Slim\\Handlers\\Strategies\\RequestResponseArgs' => $vendorDir . '/slim/slim/Slim/Handlers/Strategies/RequestResponseArgs.php',
    'Slim\\Http\\Body' => $vendorDir . '/slim/slim/Slim/Http/Body.php',
    'Slim\\Http\\Cookies' => $vendorDir . '/slim/slim/Slim/Http/Cookies.php',
    'Slim\\Http\\Environment' => $vendorDir . '/slim/slim/Slim/Http/Environment.php',
    'Slim\\Http\\Headers' => $vendorDir . '/slim/slim/Slim/Http/Headers.php',
    'Slim\\Http\\Message' => $vendorDir . '/slim/slim/Slim/Http/Message.php',
    'Slim\\Http\\Request' => $vendorDir . '/slim/slim/Slim/Http/Request.php',
    'Slim\\Http\\RequestBody' => $vendorDir . '/slim/slim/Slim/Http/RequestBody.php',
    'Slim\\Http\\Response' => $vendorDir . '/slim/slim/Slim/Http/Response.php',
    'Slim\\Http\\StatusCode' => $vendorDir . '/slim/slim/Slim/Http/StatusCode.php',
    'Slim\\Http\\Stream' => $vendorDir . '/slim/slim/Slim/Http/Stream.php',
    'Slim\\Http\\UploadedFile' => $vendorDir . '/slim/slim/Slim/Http/UploadedFile.php',
    'Slim\\Http\\Uri' => $vendorDir . '/slim/slim/Slim/Http/Uri.php',
    'Slim\\Interfaces\\CallableResolverInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/CallableResolverInterface.php',
    'Slim\\Interfaces\\CollectionInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/CollectionInterface.php',
    'Slim\\Interfaces\\Http\\CookiesInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/Http/CookiesInterface.php',
    'Slim\\Interfaces\\Http\\EnvironmentInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/Http/EnvironmentInterface.php',
    'Slim\\Interfaces\\Http\\HeadersInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/Http/HeadersInterface.php',
    'Slim\\Interfaces\\InvocationStrategyInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/InvocationStrategyInterface.php',
    'Slim\\Interfaces\\RouteGroupInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/RouteGroupInterface.php',
    'Slim\\Interfaces\\RouteInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/RouteInterface.php',
    'Slim\\Interfaces\\RouterInterface' => $vendorDir . '/slim/slim/Slim/Interfaces/RouterInterface.php',
    'Slim\\MiddlewareAwareTrait' => $vendorDir . '/slim/slim/Slim/MiddlewareAwareTrait.php',
    'Slim\\Routable' => $vendorDir . '/slim/slim/Slim/Routable.php',
    'Slim\\Route' => $vendorDir . '/slim/slim/Slim/Route.php',
    'Slim\\RouteGroup' => $vendorDir . '/slim/slim/Slim/RouteGroup.php',
    'Slim\\Router' => $vendorDir . '/slim/slim/Slim/Router.php',
    'Slim\\Views\\PhpRenderer' => $vendorDir . '/slim/php-view/src/PhpRenderer.php',
);
