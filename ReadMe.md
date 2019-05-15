# [ReactPHP](https://reactphp.org/) vs [NodeJS](https://nodejs.org)

## Definition 

```ReactPHP is a Event-driven, non-blocking I/O For PHP```

```NodeJs is an asynchronous event driven JavaScript runtime, Non-Blocking I/O```

[Non-blocking vs Blocking](https://nodejs.org/en/docs/guides/blocking-vs-non-blocking/)

### Advantages



>libuv is a multi-platform support library with a focus on asynchronous I/O.  *HEART of asynchronous Programming*

NodeJS

*Node simply enters the event loop after executing the input script. Node exits the event loop when there are no more callbacks to perform.*

*HTTP is a first class citizen* in Node, designed with streaming and low latency in mind. This makes Node well suited for the foundation of a web library or framework.

*child_process.fork() API*  for spawned of child process to use multiple cores.

*cluster module*, which allows you to share sockets between processes to enable load balancing over your cores


>JavaScript execution in Node.js is single threaded, so concurrency refers to the event loop's capacity to execute JavaScript callback functions after completing other work. Any code that is expected to run in a concurrent manner must allow the event loop to continue running as non-JavaScript operations, like I/O, are occurring.



ReactPHP

>The event loop is based on the reactor pattern (hence the name) and strongly inspired by libraries such as EventMachine (Ruby), Twisted (Python) and Node.js (V8).


#### USE CASES  

[is reactphp truly asynchronous](https://stackoverflow.com/questions/22502118/is-reactphp-truly-asynchronous)

>ReactPHP is very much inspired by node.js, which follows the same principle. The goal of such event-based patterns is not to exploit your server 16 CPU's, but to exploit fully your processor by processing HTTP request B while your controller for request A, which has made request to database, is paused until the 'database request success' event is called.

>Your test is going exactly against the assumption made by node.js and ReactPHP: "computation is fast, I/O are slow", so if we do computation during I/O (and not between I/O), then CPU time will always be available in higher quantity than needed. With node.js or ReactPHP if you want to use your server 16 CPU, you just launch 16 server process on 16 port and put a load balancer like nginx in front of them.```


[concurrency parallelism threads processes async and sync](https://medium.com/swift-india/concurrency-parallelism-threads-processes-async-and-sync-related-39fd951bc61d)

>Concurrency means executing multiple tasks at the same time but not necessarily simultaneously. In a concurrent application, two tasks can start, run, and complete in overlapping time periods i.e Task-2 can start even before Task-1 gets completed.

>Concurrency and Parallelism refer to computer architectures which focus on how our tasks or computations are performed.

>In a single core environment, concurrency happens with tasks executing over same time period via context switching i.e at a particular time period, only a single task gets executed.

>In a multi-core environment, concurrency can be achieved via parallelism in which multiple tasks are executed simultaneously.



_Threads Vs Process_

>Threads It is the smallest unit of tasks that can be executed by an OS. A program can be single threaded or multi-threaded

>Process A program can have multiple processes. A process usually starts with a single thread i.e a primary thread but later down the line of execution it can create multiple threads.



```Synchronous & asynchronous programming model helps us to achieve concurrency.```

```Asynchronous programming model in a multi-threaded environment is a way to achieve parallelism.```



[what is the difference between concurrency parallelism and asynchronous methods](https://stackoverflow.com/questions/4844637/what-is-the-difference-between-concurrency-parallelism-and-asynchronous-methods)
```
Concurrent and parallel are effectively the same principle as you correctly surmise, both are related to tasks being executed simultaneously although I would say that parallel tasks should be truly multitasking, executed "at the same time" whereas concurrent could mean that the tasks are sharing the execution thread while still appearing to be executing in parallel.

Asynchronous methods aren't directly related to the previous two concepts, asynchrony is used to present the impression of concurrent or parallel tasking but effectively an asynchronous method call is normally used for a process that needs to do work away from the current application and we don't want to wait and block our application awaiting the response.

For example, getting data from a database could take time but we don't want to block our UI waiting for the data. The async call takes a call-back reference and returns execution back to your code as soon as the request has been placed with the remote system. Your UI can continue to respond to the user while the remote system does whatever processing is required, once it returns the data to your call-back method then that method can update the UI (or handoff that update) as appropriate.

From the User perspective, it appears like multitasking but it may not be.
```

[concurrency And node](https://www.fpcomplete.com/blog/2016/12/concurrency-and-node)


[Pushing the Limits of PHP with ReactPHP - Christian Lück](https://www.youtube.com/watch?v=tRxnwK_oJu0)