The task is to find the index of a target number in a sorted array or the index where it would be inserted in order if it's not found. We will approach the problem in two steps:

## Sorting the Array with Merge Sort: 
Merge Sort is a divide-and-conquer algorithm that divides the array into smaller subarrays, sorts those subarrays, and then merges them back together in order. The time complexity of the algorithm is nlog(n). Which is comperativly more efficient than any other algorithm.

## Finding the Target Index with Binary Search: 
When the array is sorted, we use Binary Search to find the target number efficiently. Binary Search works by comparing the target with the middle element of the array. If they are not equal, it decides whether to go left or right by comparing the target with the middle element, hence reducing the search area by half at each step. The time comlexity of this algorithm is log2(n). which take minimum time to search from huge element of array or collection.