class Solution(object):
    def twoSum(self, nums, target):
        """
        :type nums: List[int]
        :type target: int
        :rtype: List[int]
        """
        for num in nums:
            try:
                a = nums.index(num)
                b = nums.index(target-num, a+1)
                if a != b:
                    return [a,b]
            except:
                pass
