
class Solution:
       def groupAnagrams(self, strs):
      result = {}
      for i in strs:
         x = "".join(sorted())
         if x in result:
            result[x].append(i)
         else:
            result[x] = [i]
      return list(result.values())
ob1 = Solution()
print(ob1.groupAnagrams(["eat", "tea", "tan", "ate", "nat", "bat"]))


### Review

Correctness
Fix below errors:
    - Correct indentation at line 3 by moving 'def group...' one space back. This needs to show as the outter most line of code since it is a function declaration and all the other lines of code needs to sit within this block.
    - Pass argument (i) to sorted() at line 6, x="".join(sorted(i)), the sorted function takes at least 1 required argument

Efficiency
This piece of code looks efficient.

Style
Add empty lines to separate code sections, makes it easier for readability. For example, I would suggest adding one empty line before and after variable declarations, one empty line before a return statement, etc.

Documentation
The piece of code is staright forward, no documentation required.


I like the structure of the code, there are no unnecessary variable declarations, or unused variables or unnecessary documentation. Every line of code does something keeping your code short, neat, efficient and straight to the point.