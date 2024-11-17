# lazy-loading-pattern-php
The lazy loading design pattern is a design pattern that delays the initialzation of an object or the execution of heavy process until it is needed. This approach optimizes performance and resources usage by avoiding unnecessary operations.

# When to Use Lazy Loading:
1. When the initilization of an object is expensive(e.g database connections, larage files)
2. when the object might not always be needed during the execution of the program.
3. To improve application performance and reduce memory usage.


# Advantages of Lazy Loading:
Improved Performance: Avoids creating objects or executing heavy processes until they are actually needed.
Reduced Memory Usage: Delays memory allocation for expensive resources.
Encapsulation: Hides the initialization logic from the rest of the application.

# Disadvantages of Lazy Loading:
Delayed Errors:
 If the resource fails to initialize, the error will occur at runtime when the resource is accessed.
Increased Complexity:
Adds an extra layer of logic to the application.