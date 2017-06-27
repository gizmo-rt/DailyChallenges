# Given an integer n, return the smallest integer a, such that a is a square of some integer and is greater than n.
#
# Example
#
# For n = 5, the output should be
# nextSquare(n) = 9.
#
# Syntax of Lambda Function
#
# lambda arguments: expression


nextSquare = lambda n:int(n**.5+1)**2

print(nextSquare(9))